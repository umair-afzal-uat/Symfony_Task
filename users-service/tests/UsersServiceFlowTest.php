<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Transport\InMemoryTransport;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Message\UserCreatedMessage;

class UserControllerTest extends WebTestCase
{
    public function testCreateUser()
    {
        $client = static::createClient();
        $client->disableReboot();

        $container = $client->getContainer();
        $entityManager = $container->get(EntityManagerInterface::class);
        $transport = $container->get('messenger.transport.async');

        // Make sure the transport is empty before starting the test
        if ($transport instanceof InMemoryTransport) {
            $transport->reset();
        }

        $data = [
            'email' => 'test@example.com',
            'firstName' => 'John',
            'lastName' => 'Doe',
        ];

        $client->request('POST', '/users', [], [], ['CONTENT_TYPE' => 'application/json'], json_encode($data));
        $response = $client->getResponse();
        $this->assertEquals(Response::HTTP_CREATED, $response->getStatusCode(), 'Response status code does not match. Response: ' . $response->getContent());

        // Check that the user was persisted to the database
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => 'test@example.com']);
        $this->assertNotNull($user);
        $this->assertEquals('John', $user->getFirstName());
        $this->assertEquals('Doe', $user->getLastName());

        // Check that the message was dispatched
        if ($transport instanceof InMemoryTransport) {
            $envelopes = $transport->get();
            $this->assertCount(1, $envelopes);
            /** @var Envelope $envelope */
            $envelope = $envelopes[0];
            $message = $envelope->getMessage();
            $this->assertInstanceOf(UserCreatedMessage::class, $message);
            // $this->assertEquals($user->getId(), $message->getId());
            $this->assertEquals('test@example.com', $message->getEmail());
            $this->assertEquals('John', $message->getFirstName());
            $this->assertEquals('Doe', $message->getLastName());
        }
    }
}

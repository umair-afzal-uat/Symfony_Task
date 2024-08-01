<?php 
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\UserCreatedMessage;

class UserController extends AbstractController
{
    private $entityManager;
    private $bus;

    public function __construct(EntityManagerInterface $entityManager, MessageBusInterface $bus)
    {
        $this->entityManager = $entityManager;
        $this->bus = $bus;
    }

    /**
     * @Route("/users", name="create_user", methods={"POST"})
     */
    public function createUser(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        $user = new User();
        $user->setEmail($data['email']);
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->bus->dispatch(new UserCreatedMessage($user->getId(), $user->getEmail(), $user->getFirstName(), $user->getLastName()));

        return new Response('User created', Response::HTTP_CREATED);
    }
}

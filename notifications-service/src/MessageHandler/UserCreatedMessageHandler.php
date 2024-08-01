<?php
namespace App\MessageHandler;

use App\Message\UserCreatedMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class UserCreatedMessageHandler implements MessageHandlerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(UserCreatedMessage $message)
    {
        $logMessage = sprintf(
            'User Created: ID %d, Email %s, First Name %s, Last Name %s',
            $message->getId(),
            $message->getEmail(),
            $message->getFirstName(),
            $message->getLastName()
        );
        $this->logger->info($logMessage);
    }
}
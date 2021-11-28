<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ThreadController extends AbstractController
{
    public function index()
    {
        $userFirstName = 'Kyomu';
        $userNotifications = [];

        return $this->render('thread/index.html.twig', [
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}
<?php

namespace Harkalygergo\SymfonyPlatform\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PopupController extends AbstractController
{
    public function __construct()
    {
    }

    public function fancy(): Response
    {
        return new Response('Hello Gergő!');
    }
}
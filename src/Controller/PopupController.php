<?php

namespace HarkalyGergo\SymfonyPlatform\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PopupController extends AbstractController
{
    public function __construct()
    {
        return new Response('Hello Gergő!');
    }
}

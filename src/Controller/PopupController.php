<?php

namespace HarkalyGergo\SymfonyPlatform\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PopupController extends AbstractController
{
    public function start(Request $request): JsonResponse
    {
        // return with $request and locale
        return new JsonResponse([
            'request' => $request->query->all(),
            'locale' => $request->getLocale(),
        ]);
    }
}

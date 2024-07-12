# Symfony Platform

Symfony Platform is a multisite and multilingual compatibility Business Management System as a Symfony PHP Framework vendor bundle. It's ideal for growing any business. Free and open-source and always will be.

---

## Installation

### Composer

```shell
composer require harkalygergo/symfony-platform
```

---

## Usage

1. Create a default controller in your Symfony project.
2. Add a code like this to:

```php
namespace App\Controller;

use HarkalyGergo\SymfonyPlatform\Controller\PopupController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PlatformController extends AbstractController
{

    #[Route('/{_locale?}/{path}', name: 'proxy', requirements: ['path' => '.+'], defaults: ['path' => ''])]
    public function index2(Request $request, $path)
    {
        // Extract the path to determine the target controller and action
        $pathParts = explode('/', $path);
        $controllerName = !empty($pathParts[0]) ? ucfirst($pathParts[0]) . 'Controller' : 'DefaultController';
        $actionName = !empty($pathParts[1]) ? $pathParts[1] . 'Action' : 'indexAction';

        // Ensure the target controller and action exist
        $controllerClass = 'HarkalyGergo\\SymfonyPlatform\\Controller\\' . $controllerName;
        if (!class_exists($controllerClass)) {
            return new Response('Controller not found', 404);
        }

        $controller = new $controllerClass();
        if (!method_exists($controller, $actionName)) {
            return new Response('Action not found', 404);
        }

        // Call the target action with the request
        return call_user_func_array([$controller, $actionName], [$request]);
    }
}
```

---

## Documentations

### Developer Book

Based on:
- latest Symfony PHP Framework (https://symfony.com)
- latest Twig template engine (https://twig.symfony.com/)
- latest Bootstrap (https://getbootstrap.com)
- latest chart.js (https://www.chartjs.org/)

Versions under Git History.

---

## Copyright

Made with :green_heart: in Budapest & Karcag (Hungary) by Harkály Gergő (https://www.harkalygergo.hu).


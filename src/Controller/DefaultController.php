<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse([
            1,
            2,
            3,
        ]);
    }
}

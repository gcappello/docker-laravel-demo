<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ApiHealthCheckController extends Controller
{
    public function __invoke()
    {
        return new JsonResponse(['status' => 'ok']);
    }
}

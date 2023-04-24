<?php

namespace App\Controllers;

use App\Models\User;
use Fomo\Controller\BaseController;

class Controller extends BaseController
{

    public function index()
    {
        $user = User::first();

        return response()->json([
            'code' => 200,
            'data' => [
                'user' => $user->name,
                'id' => $user->id,
            ],
         ]);
    }
}
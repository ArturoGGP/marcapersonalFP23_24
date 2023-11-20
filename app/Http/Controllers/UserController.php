<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    public function showProfile($name)
    {
        $user = [
            'nombre' => $name,

        ];

        return view('user.profile', ['usuario' => $user]);
    }
}

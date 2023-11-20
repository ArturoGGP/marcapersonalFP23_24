<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getId($id)
    {
        if ($id <= 10){$id = $id;} else {$id = 10;}

        return view('catalog.edit', ['id' => $id]);
    }
}

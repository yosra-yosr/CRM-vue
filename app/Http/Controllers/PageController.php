<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page(Request $request): Response
    {
            $yosra="r";
        return Inertia::render('Profile/page', [
            'yosra' =>$yosra,
            'ferdawes' => 'folla',
          
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperimentController extends Controller
{

    public function show($link)
    {
//        echo $link;
        return view('experiment', ['link' => $link]);
    }

    public function save(Request $request)
    {

        var_dump($request->all());

        echo "SAVE  ";
    }
}

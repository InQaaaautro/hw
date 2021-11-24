<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class ScientificWorkIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        #dd(1);

        return view('dashboard');
    }


}

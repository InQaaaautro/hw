<?php

namespace App\Http\Controllers;

use App\Models\File;
use View;
use Illuminate\Http\Request;

class FileIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        View::share([
            "files" => File::paginate()
        ]);
        return view('files');
    }
}

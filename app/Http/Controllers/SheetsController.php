<?php

namespace App\Http\Controllers;


use App\Services\Sheets\SheetsService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SheetsController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->external_id;
        $listSheets = SheetsService::getUserSheets($user_id);
        return view('parts.sheets.index', ['sheets' => $listSheets]);
    }

}

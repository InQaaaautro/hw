<?php

namespace App\Http\api\Sheets;

use App\Services\Sheets\SheetsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SheetsPostGradeController
{

    public function __invoke(Request $request)
    {
        $parameters = $request->toArray();
        return SheetsService::postStudentGrade(
            $parameters['GUIDSheet'],
            $parameters['GUIDStudent'],
            $parameters['GUIDGrade'],
            Auth::user()->external_id
        );

    }
}

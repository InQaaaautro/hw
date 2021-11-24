<?php

namespace App\Services\Sheets;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SheetsService extends Http
{
    const GetListSheetEndPoint = "cdo_eois_Campus/GetListSheet";
    const postStudentGradeEndPoint = "cdo_eois_Campus/InsertGrade";

    public static function getConnect(): PendingRequest
    {
        return parent::accept('application/json')
            ->withBasicAuth(
                env('URI_TO_EDUBASE_LOGIN'),
                env('URI_TO_EDUBASE_PASSWORD')
            )
            ->baseUrl(env('URI_TO_EDUBASE'));
    }

    public static function getUserSheets($userID)
    {
        return SheetsService::getConnect()
            ->get(self::GetListSheetEndPoint, ["user_id" => $userID])
            ->json();
    }

    public static function postStudentGrade($GUIDSheet, $GUIDStudent, $GUIDGrade, $user_id) {
        return SheetsService::getConnect()
            ->get(
                self::postStudentGradeEndPoint,
                [
                    "GUIDSheet" => $GUIDSheet,
                    "GUIDStudent" => $GUIDStudent,
                    "GUIDGrade" => $GUIDGrade,
                    "user_id" => $user_id
                ]
            )
            ->json();
    }

}

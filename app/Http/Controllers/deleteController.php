<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    function onDelete()
    {
        $result = DB::table('students')->truncate();

        if($result==true)
        {
            return "delete success";
        }
        else{
            return "delete failed";
        }
    }
}

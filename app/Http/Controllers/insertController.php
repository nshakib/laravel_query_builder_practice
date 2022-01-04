<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insertController extends Controller
{
    function insertRow()
    {
        $result= DB::table('students')
            ->insertOrIgnore(
                [
                    ['id'=>32,'name'=>'shakib','class'=>'5','roll'=>'5'],
                    ['id'=>33,'name'=>'rakib','class'=>'8','roll'=>'1'],
                    ['id'=>34,'name'=>'samia','class'=>'7','roll'=>'3'],
                    ['id'=>35,'name'=>'sumaiya','class'=>'6','roll'=>'9'],
                ]
            );


        if($result==true)
        {
            return "Insert success";
        }
        else{
            return "Failed";
        }
    }
}

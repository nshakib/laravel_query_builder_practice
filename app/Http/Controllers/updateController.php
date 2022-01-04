<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    function onUpdate()
    {
        $result= DB::table('students')->where('name','=','Sarika')
            ->update(['name'=>'Sarika Kabir','class'=>'1','roll'=>'5']);

        if($result==true)
        {
            return "update success";
        }else{

            return "Update failed";
        }
    }
}

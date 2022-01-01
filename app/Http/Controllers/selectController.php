<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2022-01-01 18:30:04
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2022-01-01 18:33:25
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class selectController extends Controller
{

    function uniqueSelect()
    {
        $result = DB::table('students')->distinct()->get();
        return $result;
    }


    function singleColumnSelect()
    {
        $result = DB::table('students')->select()->get();
        return $result;
    }

    function multiColumnSelect()
    {
        $result = DB::table('students')->select('name','roll')->get();
        return $result;
    }
}

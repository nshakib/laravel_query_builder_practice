<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2022-01-01 11:11:31
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2022-01-01 18:18:31
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class agregateController extends Controller
{

    /*************/
    //count row
    /************* */

    function countRow()
    {
        $result = DB::table('students')->count();
        return $result;
    }

    /*************/
    /* max row    **
    /************* */

    function maxRow()
    {
        $result = DB::table('students')->max('id');
        return $result;
    }

    /*************/
    /* min row    **
    /************* */
    function minRow()
    {
        $result = DB::table('students')->min('id');
        return $result;
    }

    /*************/
    /* average row    **
    /************* */
    function avgRow()
    {
        $result = DB::table('students')->avg('roll');
        return $result;
    }
}

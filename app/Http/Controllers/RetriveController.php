<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2022-01-01 02:49:14
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2022-01-01 10:12:35
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RetriveController extends Controller
{

    /******************* */
    // Retrive  all data
    /****************** */
    function selectAllRows()
    {
        $result = DB::table('students')->get();//select all data

        return json_encode($result);
    }

    /******************* */
    // Single Retrive data
    /****************** */

    function oneRow()
    {
        $result = DB::table('students')->where('name', '=', 'karim')->first();//single row
        return json_encode($result);
    }

    /******************* */
    // find rows
    /****************** */
    function findRows()
    {
        $result = DB::table('students')->find(4);
        return $result;
    }

    /******************* */
    // select one column
    /****************** */

    function selectOneColumn()
    {
        $result = DB::table('students')->pluck('name');
        return $result;
    }


     /******************* */
    // select multiple column
    /****************** */

    function selectMultipleColumn()
    {
        $result = DB::table('students')->pluck('name','id');
        return $result;
    }


     /******************* */
    // select specific data
    /****************** */

    function specificData()
    {
        $result = DB::table('students')->where('id','=','4')->value('name');
        return $result;
    }

}

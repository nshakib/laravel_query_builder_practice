<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    function leftJoinData()
    {
        $result = DB::table('students')//mother arble
            ->leftJoin('exam_marks','students.roll', '=','exam_marks.roll')
            ->get();
            return $result;
    }

    function rightJoinData()
    {
        $result = DB::table('students')//mother arble
        ->rightJoin('exam_marks','students.roll', '=','exam_marks.roll')
            ->get();
        return $result;
    }
}

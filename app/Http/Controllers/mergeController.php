<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mergeController extends Controller
{
    function mergeData()
    {
        $students =DB::table('students')->get();
        $emMarks =DB::table('exam_marks')->get();

        //merge
        $totalData = $students->merge($emMarks);
        return $totalData;
    }
}

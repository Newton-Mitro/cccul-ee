<?php

namespace App\Http\Controllers;

use Response;
use App\Models\EmployeeExam;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeExamRequest;
use App\Http\Requests\UpdateEmployeeExamRequest;

class EmployeeExamController extends Controller
{

    public function currentExamCount($employeeCode, $currentExamId)
    {
        $currentExamCount =  EmployeeExam::where('exam_id', $currentExamId)->where('employee_code', $employeeCode)->count();
        return  Response::json(['count' => $currentExamCount+1 ]);
    }

    public function show($employeeCode)
    {
        $empExam =  EmployeeExam::where('employee_code', $employeeCode)->get()->firstOrFail();
        return  $empExam;
    }

}

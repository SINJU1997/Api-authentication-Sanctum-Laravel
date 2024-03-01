<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        // return "Hello world";
        $students=Student::all();
        // when $students is not empty
        if($students->count()>0){
            return response()->json([
                'status'=>200,
                'students'=>$students
            ],200);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No record found'
            ],404);
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        if($request->row == null){
            $row = 10;
        }
        else{
            $row = $request->row;
        }
        if($request->page == null){
            $page = 1;
        }
        else{
            $page = $request->page;
        }
        if($request->search == null){
            $search = '%%';
        }
        else{
            $search = $request->search.'%';
        }

        $data['row_view'] =$row;
        $data['student_count'] = Student::count();
        $data['students'] = DB::table('students')->skip(($page-1)*$row)->take($row)
        ->where('full_name', 'LIKE', $search) 
        ->orWhere('email', 'LIKE', $search)
        ->get();
        $data['page'] = $page;
        $data['current_student_count'] = DB::table('students')
        ->where('full_name', 'LIKE', $search) 
        ->orWhere('email', 'LIKE', $search)
        ->count();

        $data['page_count'] = $data['current_student_count'] / $row;
       
   
        return view('index', $data);
    }

    public function index_ajax(Request $request)
    {
        $row = $request->row;
        $page = 1;

        if($request->search == null){
            $search = '%%';
        }
        else{
            $search = $request->search.'%';
        }
        $data['row_view'] =$row;


        $data['student_count'] = Student::count();

        $data['students'] = DB::table('students')->skip(0)->take($row)
        ->where('full_name', 'LIKE', $search) 
        ->orWhere('email', 'LIKE', $search)
        ->get();
        $data['page'] = $page;

        $data['current_student_count'] = DB::table('students')
        ->where('full_name', 'LIKE', $search) 
        ->orWhere('email', 'LIKE', $search)
        ->count();

        $data['page_count'] = $data['current_student_count'] / $row;

        $html = view('layouts.index_render', $data)->render();
       
   
        return response()->json($html);
    }
}

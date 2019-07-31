<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();
class addstudentcontroller extends Controller
{
    public function addstudent(){
        
       return view('admin.addstudent') ;
        
        
    }   
      public function save_student(Request $request){
        $data = array();
          $data['student_name']=$request->student_name;
          $data['student_rool']=$request->student_rool;
          $data['student_fathersname']=$request->student_fathersname;
          $data['student_mothersname']=$request->student_mothersname;
          $data['student_email']=$request->student_email;
          $data['student_phone']=$request->student_phone;
          $data['student_pass']=md5($request->student_pass);
          $data['student_year']=$request->student_year;
          $data['student_address']=$request->student_address;
          $data['student_admissionyear']=$request->student_admissionyear;
          $data['student_depertment']=$request->student_depertment;
          $image=$request->file('student_image');
        if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
                $data['student_image']=$image_url;
                DB::table('student_tbl')->insert($data);
               session::put('fool','student add sucssfully');
            return Redirect::to('/addstudent');
            
            }     
        }   
          $data['student_image']='';
          DB::table('student_tbl')->insert($data);
             session::put('fool','student add sucssfully');
            return Redirect::to('/addstudent');
          
          
              DB::table('student_tbl')->insert($data);
             session::put('fool','student add sucssfully');
            return Redirect::to('/addstudent'); 
    }   

}

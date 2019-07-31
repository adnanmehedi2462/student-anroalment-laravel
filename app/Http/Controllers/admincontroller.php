<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();
class admincontroller extends Controller
{
    public function admin_dashbord(){
        
       return view('admin.dashbord') ;
        
        
    } 
    
    
    
//    student dashbord
        
     
    
    
    
    //all student
    public function allstudent(){
        
//       return view('admin.allstudent') ;
  
        $allstudent_info=DB::table('student_tbl')
            ->get();
        $manage_Student=view('admin.allstudent')
            ->with('allstudent_info',$allstudent_info);
          return view('layout')
              ->with('allstudent',$manage_Student);
        
       
    }
    
    
    
    
    
    //add student///////////
    
    

    
    //tutionfee//////
    public function tutionfee(){
        
       return view('admin.tutionfee') ;
        
        
    }
    
    //cse///////
    
    public function cse(){
        
//       return view('admin.cse') ;
        
        
    $cseinfo=DB::table('student_tbl')
        ->where(['student_depertment'=>'cse'])
        ->get();
        
        $manage_cse=view('admin.cse')
             ->with('cseinfo',$cseinfo);
        return view('layout')
            ->with('cse',$manage_cse);
             return view('admin.cse');
            
        
        
        
        
    }
    //bba//////
    
    public function bba(){
//        
//       return view('admin.bba') ;
        
        
               
    $bbainfo=DB::table('student_tbl')
        ->where(['student_depertment'=>'bba'])
        ->get();
        
        $manage_bba=view('admin.bba')
             ->with('bbainfo',$bbainfo);
        return view('layout')
            ->with('bba',$manage_bba);
             return view('admin.bba');
             
        
        
        
    }
    
    //ete
    
    public function ete(){
        
        $bbainfo=DB::table('student_tbl')
        ->where(['student_depertment'=>'ete'])
        ->get();
        
        $manage_bba=view('admin.bba')
             ->with('bbainfo',$bbainfo);
        return view('layout')
            ->with('bba',$manage_bba);
             return view('admin.bba');
             
        
        
        
    
        
        
    }
    //view
     public function view(){
        
       return view('admin.view') ;
        
        
    }    //satting
     public function satting(){
        
       return view('admin.satting') ;
        
        
    }
    //login_dashbord
 public function login_dashbord(Request $request){
     
      
     $email=$request->admin_email;
     $password=md5($request->admin_password);
     $result=DB::table('admin_tbl')
         ->where('admin_email',$email)
         ->where('admin_password',$password)
         ->first();
     
     if($result){
         
         Session::put('admin_email',$result->admin_email);
         Session::put('admin_id',$result->admin_id);
         
         return Redirect::to('/admin_dashbord');
         
         
     }
     else{
         
         Session::put('fool','password or email invalid');
         return Redirect::to('/backend');
         
         
     }
 }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
         public function student_dashbord(){
        
       return view('student.deshbord') ;
        
        
    }
    
      
         public function student_satting(){
        
//       return view('student.student_satting') ;
        
                   $student_id=session::get('student_id');

            $viess=DB::table('student_tbl')
                ->select('*')
                ->where('student_id',$student_id)
                ->first();
             $manes=view('student.student_satting')
                 ->with('views',$viess);
             return view('student_layout')
                 ->with('student_satting',$manes);
        
             
             
    }
    
    
    
         public function student_profile(){
        
      
             $student_id=session::get('student_id');
             
             $view=DB::table('student_tbl')
                 ->select('*')
                 ->where('student_id',$student_id)
                 ->first();
             $manage_Student=view('student.student_profile')
                 ->with('views_one',$view);
             return view('student_layout')
                 ->with('student_profile',$manage_Student);
        
        
    }
    
    
    
    
   
    
    
    
    
    
       // student login_dashbord
 public function studentlogin_dashbord(Request $request){
     
      
     $email=$request->student_email;
     $password=md5($request->student_pass);
     $result=DB::table('student_tbl')
         ->where('student_email',$email)
         ->where('student_pass',$password)
         ->first();
     
   
     
     if($result){
         
         Session::put('student_email',$result->student_email);
         Session::put('student_id',$result->student_id);
         
         return Redirect::to('/student_dashbord');
         
         
     }
     else{
         
         Session::put('fool','password or email invalid');
         return Redirect::to('/');
         
         
     }
}
    
    
       
    
    
    
    
    
    
    
    public function student_logout(){
        
        
        session::put('student_name',null);
        session::put('student_id',null);
        
        return Redirect::to('/');
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //logout
    
    public function logout(){
  session::put('admin_name',null);
  session::put('admin_id',null);
        
      return Redirect::to('/backend'); 
        
    }
    
//    student delete
    
    public function studentdelete($student_id){
        
      DB::table('student_tbl')
          ->where('student_id',$student_id)
          ->delete();
        
        return Redirect::to('/allstudent');
        
        
        
    }
    //    teacher delete
    
    public function delete_teacher($student_id){
        
        DB::table('teacher_tbl')
->where('teacher_id',$student_id)
        ->delete();
        
        
        return Redirect::to('/allteacher');
    }
    
    
    public function studentview($student_id){
        
        
$student_view=DB::table('student_tbl')
    ->select('*')
    ->where('student_id',$student_id)
    ->first();
//        echo"<pre/>";
//        print_r($student_view);
//            echo"<pre/>";
  
        
        $manege_view=view('admin.studentview')
            ->with('views_one',$student_view);
        
        
        return view('layout')
            ->with('studentview',$manege_view);
        
    }
    
    public function editstudent($student_id){
   $edit_student=DB::table('student_tbl')
       ->select('*')
    ->where('student_id',$student_id)
       ->first();
       $manege_edit=view('admin.student_edit')
            ->with('edit_one',$edit_student);
        
        
        return view('layout')
            ->with('student_edit',$manege_edit);
        
        
    }
    
    public function update_student(Request $request,$student_id){
        
       $data=array();
        $data['student_name']=$request->student_name;
        $data['student_rool']=$request->student_rool;
        $data['student_fathersname']=$request->student_fathersname;
        $data['student_mothersname']=$request->student_mothersname;
        $data['student_email']=$request->student_email;
        $data['student_pass']=$request->student_pass;
        $data['student_phone']=$request->student_phone;
        $data['student_year']=$request->student_year;
        $data['student_address']=$request->student_address;
    DB::table('student_tbl')
        ->where('student_id',$student_id)
        ->update($data);
        
        session::put('fool','student update successfully');
        return Redirect::to('/allstudent');
        
    }
//    update teacher
    
        public function editteacher($teacher_id){
   $edit_teacher=DB::table('teacher_tbl')
       ->select('*')
    ->where('teacher_id',$teacher_id)
       ->first();
       $manege_edit=view('admin.update_teacher')
            ->with('edit_one',$edit_teacher);
        
        
        return view('layout')
            ->with('update_teacher',$manege_edit);
        
        
    }
    
    
    
    public function update_teacher(Request $request,$teacher_id){
        
       $data=array();
        $data['teacher_name']=$request->teacher_name;
       
      
  
        $data['teacher_phone']=$request->teacher_phone;

        $data['teacher_address']=$request->teacher_address;

    DB::table('teacher_tbl')
        ->where('teacher_id',$teacher_id)
        ->update($data);
        
        session::put('fool','teacher update successfully');
        return Redirect::to('/allteacher');
        
    }
    
    public function add_teacher(){
        
        
    return  view('admin.add_teacher');
        
    }
    
    
    public function saveteacher(Request $request){
      
         
        $data = array();
          $data['teacher_name']=$request->teacher_name;
        
       
         
          $data['teacher_phone']=$request->teacher_phone;
          
          
          $data['teacher_address']=$request->teacher_address;
        
          $data['teacher_depertment']=$request->teacher_depertment;
          $image=$request->file('teacher_image');
        if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
                $data['teacher_image']=$image_url;
                DB::table('teacher_tbl')->insert($data);
               session::put('fool','teacher add sucssfully');
            return Redirect::to('/addteacher');
            
            }     
        }   
          $data['teacher_image']='';
          DB::table('teacher_tbl')->insert($data);
             session::put('fool','Teacher add sucssfully');
            return Redirect::to('/addstudent');
          
          
              DB::table('teacher_tbl')->insert($data);
             session::put('fool','teacher add sucssfully');
            return Redirect::to('/addteacher'); 
    } 
        
        
//        teacher all
    
    
    
     public function all_teacher(){
         
     $teacher_info=DB::table('teacher_tbl')
         
         ->get();
         $manege_teacher=view('admin.allteacher')
             ->with('allteacher_info',$teacher_info);
             return view('layout')
                 ->with('admin.allteacher',$manege_teacher);
         
     }
//      view teacher
    
   public function teacherview($teacher_id){
       $viewteacher=DB::table('teacher_tbl')
           ->select('*')
           ->where('teacher_id',$teacher_id)
           ->first();
      $manageview=view('admin.teacherview')
          ->with('views_one',$viewteacher);
       return view('layout')
           ->with('teacherview',$manageview);
          
    
       
       
   }
    
    
    public function studentsupdate(Request $request){
 $student_id=session::get('student_id');
        $data = array();
        $data['student_pass']=md5($request->student_pass);
        $data['student_phone']=$request->student_phone;
        $up=DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);
        Session::put('fool','update successfully');
        return Redirect::to('/student_satting');
        
        
        
    }
    
    
    

    }
    
    
    
      

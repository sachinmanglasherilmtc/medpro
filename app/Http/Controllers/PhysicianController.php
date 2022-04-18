<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicianController extends Controller
{
   /*custom functions for Physician portal*/
  
      /*view for register page*/
    public function register()
    {
        return view('physician/register');
    }
    /*view for Login Page*/ 
    public function login()
    {
    return view('physician/login');
    }
    
    /*view for forgotpassword1*/
    public function forgotpassword()
    {
        return view('physician/forgot_password1');
    }

    /*view for forgotpassword2*/

    public function forgotpassword2()
    {
        return view('physician/forgot_password2');
    }
      /*view for reset password*/
    public function password_reset(Request $request,$id)
    {

        if($id){
            return view('physician/reset_password');
        }else{
            echo "Invalid Url";
        }
     
    }

    /*view for reset_success*/
    public function reset_success()
    {
        return view('physician/reset_success');
    }

    /*custom funtion for pharmacist portal*/
    public function dashboard()
    {
    return view('physician/index');
    }

    public function patient_management()
    {
        return view('physician/patientmgmt');
    }
     
    public function add_patient(){
        return view('physician/addpatient');
    }

    public function physician_management(){
        return view('physician/physicianmgmt');
    }

    public function prescription_management(){
        return view('physician/prescriptionmgmt');
    }

    public function add_prescription(){
        return view('physician/addprescription');
    }
}

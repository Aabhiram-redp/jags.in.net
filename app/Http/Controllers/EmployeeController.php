<?php
namespace jags\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\View;
use jags\Http\Requests;
use jags\Http\Controllers\Controller;
class EmployeeController extends Controller{

    public function index(){
        return view('employee/employee');
    }
    public function profile($name,$id=0){

        return view('employee.employee');
    }
}
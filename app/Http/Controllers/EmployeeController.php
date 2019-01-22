<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
      //echo "asaoy geboyu";
      $employee = Employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);
      //var_dump($employee);
      return view('employee.index',compact('employee'));
    }
    function create() {
      //echo "telo";
      //url employee/create >_<
      return view('employee.create');
    }
    function store (Request $request){
      //echo "jatmiko";
      $empId = $request->input('emp_id');
      $empName = $request->input('emp_name');
      $empAddress = $request->input('emp_address');
      $empNotelp =$request->input('emp_notelp');

      echo $empId. "<br />".
      $empName. "<br />".
      $empAddress. "<br />".
      $empNotelp;

      Employee::create([
      'employee_id' => $empId,
      'employee_name' => $empName,
      'employee_address' => $empAddress,
      'employee_phone_number' => $empNotelp
      ]);

      return redirect('/Employee');

    }
    public function show($id){
    $employee = Employee:: where('employee_id',$id)->get();
    return view('employee.show',compact('employee'));

    }
    public function edit($id){
      $employee = Employee:: where('employee_id',$id)->get();
      return view('employee.edit',compact('employee'));

    }
    public function update(Request $request, $id){
      $empId = $request->input('emp_id');
      $empName = $request->input('emp_name');
      $empAddress = $request->input('emp_address');
      $empNotelp =$request->input('emp_notelp');

      Employee::where('employee_id',$id)->update([
        'employee_id' => $empId,
        'employee_name' => $empName,
        'employee_address' => $empAddress,
        'employee_phone_number' => $empNotelp

      ]);

      return redirect('/Employee');

    }
    public function destroy($id){
      $employee = Employee::where('employee_id',$id)->first();
      $employee->delete();
      return redirect('/Employee');
    }
}

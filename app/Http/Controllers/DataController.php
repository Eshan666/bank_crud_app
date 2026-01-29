<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class DataController extends Controller
{

    public function inputForm(Request $request){

   

    return view('inputForm');
}

public function storeData(Request $request){

 $employee = new Employee();

    session(['username' => $request->username]);
    session(['email' => $request->email]);
    session(['age' => $request->age ]);
    session(['salary' => $request->salary ]);
    $username = session('username');
    $email = session('email');
    $age = session('age');
    $salary = session('salary');

    $employee->name = $username;
    $employee->email = $email;
    $employee->age = $age;
    $employee->salary = $salary;
    $employee->save();

    return redirect('input-form')->with('saved','Data saved succesfully');

}

    public function displayData(){

    $employees = Employee::paginate(8);

    // $username = session('username');
    // $email = session('email');
    // $age = session('age');
    // $salary = session('salary');

    //session()->flush();
  
    return view('display', compact('employees'));

    }

    public function deleteData($id){
        Employee::destroy($id);
        return redirect('display-data')->with('deleted','Employee Deleted');
    }

    public function updateForm($id){
        $employee = Employee::findOrFail($id);
        return view('updateForm', compact('employee'));
    }

    public function updateData($id,Request $request){
    $employee = Employee::findOrFail($id);

    session(['username' => $request->username]);
    session(['email' => $request->email]);
    session(['age' => $request->age ]);
    session(['salary' => $request->salary ]);
    $username = session('username');
    $email = session('email');
    $age = session('age');
    $salary = session('salary');

    $employee->name = $username;
    $employee->email = $email;
    $employee->age = $age;
    $employee->salary = $salary;
    $employee->save();

    return redirect('display-data')->with('updated',true);

    }


    public function bulkDelete(Request $request){
        $ids = $request->ids;
        if(!$request->ids){
            return redirect()->back();
        }
        Employee::whereIn('id', $ids)->delete();
        return redirect('/display-data');
    }

}
    

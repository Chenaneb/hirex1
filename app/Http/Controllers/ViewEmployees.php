<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ViewEmployees;
use Illuminate\Support\Facades\Route;

class ViewEmployees extends Controller
{
     public function view(Request $request)
    {
        //$ViewEmployees = DB::select('select * from employees');
        $ViewEmployees = Employee::all();
       // return  $ViewEmployees;
       // return view('view', $ViewEmployees);

        //return view('view',['ViewEmployees'=> $ViewEmployees]);
        // return view('view')->with("ViewEmployees", $ViewEmployees);
         return view('view', compact('ViewEmployees'));

    }


    public function export()
       {

  return Excel::download(new EmployeesExport(), 'Employees.xlsx');
       }



       public function edit($id)
       {
     //   $ViewEmployees = Employee:: table('employees')-> where ('id',$id)->first();
        //return view('edit_view',compact('view'));


        $ViewEmployees =DB::table('employees')->find($id);  
        return view('edit',compact('ViewEmployees'));
       }

       public function deletePost($id){
        $ViewEmployees = Employee:: table('employees')-> where ('id',$id) ->delete();
return back()->with('delete_view','post deleted successfully');
       }


       public function destroy($id)
       {
          DB::delete('DELETE FROM employees WHERE id = ?', [$id]);
          echo ("User Record deleted successfully.");
          return redirect()->route('view.view');
       }
       
       //update emp
       public function updateEmp(Request $request) {
           $request->validate([
               'first_name'=>'required'
           ]);
           try {
               $emp = Employee::find($request->id);
               $employee->first_name = $request->first_name;
               
               
               
               $employee->save();
           }
           catch(\Exception $e){
               
           }
       }



}



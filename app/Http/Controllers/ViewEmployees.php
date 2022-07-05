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
        return view('edit',compact('ViewEmployees','id'));
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
                   'first_name'=>'required|string|min:2',
                   'middle_name'=>'required|string|min:2',
                   'last_name'=>'required|string|min:2',
                    'email'=>'required|email|min:4',
                   'phone_number'=>'required|string|min:9',
                   'id_number' =>'required|string',
                   'agent_name'=>'required|string',
                   'agent_phone_number'=>'required|string',
                   'guardian_name' => 'required|string',
                   'guardian_phone_number'=>'required|string',
                     'country'=>'required|string',
                      'city'=>'required|string',
                       'postal_code'=>'required|string',
                   'gender'=>'required|string'
                   ]);
                   try{
                       $filelinktostore='';
                       if($request->file('profile_photo'))
                       {
                           //check extensions
                           $extensions = array("png","jpg","jpeg","pdf");
                           $result = array($request->file('profile_photo')->guessExtension());
                           
                           if(!in_array($result[0],$extensions)){
                               return 'Invalid Image';
                            }
                            //upload file
                            $file = $request->file('profile_photo');
                       
                            $destinationPath = 'images/';
                            $fileName = "profile".date('YmdHis') . "." . $files->guessExtension();
                            
                            $files->move($destinationPath, $fileName);
                            
                            $filelinktostore =  \Config::get('app.url').'/'.$destinationPath.$fileName;    
                        }
                        $emp = Employee::find($request->id);
                        $emp->first_name = $request->first_name;
                        $emp->middle_name = $request->middle_name;
                        $emp->last_name = $request->last_name;
                        $emp->email = $request->email;
                        $emp->phone_number = $request->phone_number;
                        $emp->id_number = $request->id_number;
                        $emp->passport_number = $request->passport_number;
                        $emp->agent_name = $request->agent_name;
                        $emp->agent_phone_number = $request->agent_phone_number;
                        $emp->guardian_name = $request->guardian_name;
                        $emp->guardian_phone_number = $request->guardian_phone_number;
                        $emp->country = $request->country;
                        $emp->city = $request->city;
                        $emp->postal_code = $request->postal_code;
                        $emp->male_occupation = $request->male_occupation;
                        $emp->female_occupation = $request->female_occupation;
                        $emp->gender = $request->gender;
                        $emp->file_upload = $filelinktostore;
                        $emp->save();
                    return back()->with('success', 'Employee  updated successfully');
                }
                catch(\Eception $e)
               {
                   \Log::error($e);
                   return back()->with('failure', 'Employee  failed to save');
               }
               
       }



}



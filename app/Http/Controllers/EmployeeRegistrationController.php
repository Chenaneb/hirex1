<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class EmployeeRegistrationController extends Controller

{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.dashboard');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        Log::info($request);
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
            $filelinktostore='';
            try{
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
                
                    $destinationPath = 'folder_to_store_images/';
                    $fileName = "profile".date('YmdHis') . "." . $files->guessExtension();
                
                    $files->move($destinationPath, $fileName);
                
                    $filelinktostore =  \Config::get('app.url').'/'.$destinationPath.$fileName;    
                }
            Employee::create([
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                 'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                 'id_number' => $request->id_number,
                 'passport_number' => $request->passport_number,
                 'agent_name' => $request->agent_name,
                 'agent_phone_number' => $request->agent_phone_number,
                'guardian_name' => $request->guardian_name,
                'guardian_phone_number' => $request->guardian_phone_number,
                 'country' => $request->country,
                 'city' => $request->city,
                 'postal_code' => $request->postal_code,
                 'male_occupation' => $request->male_occupation,
                 'female_occupation' => $request->female_occupation,
                 'gender' => $request->gender,
                 //upload code
                 
                 'file_upload' => $filelinktostore,
              
            ]);
           return back()->with('success', 'Employee  saved successfully');
        }
        catch(\Eception $e)
        {
            \Log::error($e);
            return back()->with('failure', 'Employee  failed to save');
        }

    }
    public function update(Request $request) {
        return back();
    }
}

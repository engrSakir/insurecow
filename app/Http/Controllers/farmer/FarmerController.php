<?php

namespace App\Http\Controllers\farmer;

use App\Http\Controllers\Controller;
use App\User;
use App\Farmer_reg_2;
use App\Medical;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(\auth()->user() == null){
        //     return view('farmer.index');

        // }else{
        //     return "farmer page after logged in, code farmer/FarmerController";
        // }
        return view('farmer.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'nid' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'password' => 'required',
        ];
        $this->validate($request, $validate);

        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->adress = $request->adress;
        $user->nid = $request->nid;
        $user->dob = $request->dob;
        $user->save();

        $credentials = $request->only('phone', 'password');
        Auth::attempt($credentials);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function chooseplan()
    {
        return view('farmer.chooseplan');
    }

    public function changepassword()
    {
        return view('farmer.change-password');
    }

    public function updatepassword(Request $request)
    {
        request()->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'verify_password' => 'required'
        ]);

        $pass = auth()->user()->password;

        $current_password = request('current_password');
        $new_password = request('new_password');
        $confirm_password = request('verify_password');
        $hash=(\Illuminate\Support\Facades\Hash::check($current_password, $pass));
        $new=(\Illuminate\Support\Facades\Hash::check($new_password, $pass));
        $confirm=(\Illuminate\Support\Facades\Hash::check($confirm_password, $pass));


        if ($hash && $hash != $new && $hash!=$confirm && $new==$confirm ) {

           
               auth()->user()->update([
                'password' => Hash::make($new_password)
            ]);
            session()->flash('password_success', 'Password updated successfully');
            return back();
        }
            else if  (\Illuminate\Support\Facades\Hash::check($current_password, $pass) && \Illuminate\Support\Facades\Hash::check($new_password, $pass)&& \Illuminate\Support\Facades\Hash::check($confirm_password, $pass)) {
                session()->flash('password_failed', 'Password Same');
                return back();
            }


         else {
            session()->flash('password_failed', 'Password Change failed');
            return back();
        }
    }

    public function registeredcattle()
    {
        $registeredcattles = Farmer_reg_2::where('user_id', auth()->user()->id)->get();
        return view('farmer.registered-cattle', compact('registeredcattles'));
    }

    public function farmernotification()
    {
        return view('farmer.farmer-notifcation');
    }

    public function medicalreport()
    {
        return view('farmer.medical-report');
    }

    public function savemedicalreport(Request $request)
    {
        $inputs = \request()->validate([
            'pdf_file' => 'required',
        ]);

        if (request('pdf_file')) {
            $inputs['pdf_file'] = \request('pdf_file')->store('images');
        }

        $inputs['user_id'] = Auth::user()->id;
        Medical::create($inputs);

        return redirect()->back();
    }

    public function writemedicalreport()
    {
        return view('farmer.write-medical-report');
    }

    public function savewritemedicalreport(Request $request)
    {
        $request->validate([
            "vaccination_date.*" => 'required',
            "next_vaccination_date.*" => 'required',
            "health_issue.*" => "required"
        ]);

        $vaccination_date = $request->vaccination_date;
        $next_vaccination_date = $request->next_vaccination_date;
        $health_issue = $request->health_issue;

        for ($i = 0; $i < count($vaccination_date); $i++) {
            $dataSave = [
                'vaccination_date' => $vaccination_date[$i],
                'next_vaccination_date' => $next_vaccination_date[$i],
                'health_issue' => $health_issue[$i],
                'user_id' => Auth::user()->id,
            ];
            DB::table('medicals')->insert($dataSave);
        }

        return redirect()->back();
    }

    public function savedmedicalreport()
    {
        return view('farmer.saved-medical-reports');
    }
}


<?php

namespace App\Http\Controllers\Author;

use App\Mail\VerificationMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/member/dashboard';

    public function __construct()
    {
        $this->middleware('guest');

    }

    public function index()
    {
        return view('author.register');
    }

    public function login()
    {
//        return "hello";
        return view('author.login');
    }

    public function store(Request $request)
    {

        // return $request;

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:12', 'unique:users'],
            'gender' => 'required',
            'marital_status' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'district' => 'required',
            'birthday' => 'required',
            'createdby' => 'required',
            'religion' => 'required',
            'looking_for' => 'required',
            'agreement' => 'required',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // $image = $request->file('image');
        // $slug = str_slug($request->firstname);
        // if (isset($image)){
        //     $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     if (!file_exists('profile')){
        //         mkdir('profile', 0777, true);
        //     }

        //     $image->move('profile', $imagename);
        // }else{
        //     $imagename = 'default.png';
        // }

        $date = date("dmy");
        if (User::count() > 0){
            $last_id_temp= User::all()->last()->id;
        }else{
            $last_id_temp = 0;
        }
        $last_id = date("ym")+$last_id_temp+1;


        $saveuser = User::create([
            'u_id'  => $last_id,
            'role_id'  => 2,
            'package_price_id'  => 1,
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'mobile'  => $request->mobile,
            'email'  => $request->email,
            'gender'  => $request->gender,
            'marital_status'  => $request->marital_status,
            'profession'  => $request->profession,
            'country'  => $request->country,
            'district'  => $request->district,
            'birthday'  => $request->birthday,
            'guardian_mobile'  => $request->guardian_mobile,
            'createdby'  => $request->createdby,
            'religion'  => $request->religion,
            'social_order'  => $request->social_order,
            'looking_for'  => $request->looking_for,
            'address'  => $request->address,
            'agreement'  => $request->agreement,
            'status'  => 0,
            'password' => Hash::make($request->password),
            'verifyToken' => Str::random(40),
        ]);


        if ($saveuser) {
            Mail::to($saveuser->email)->send(new VerificationMail($saveuser));
            return view('mail.verification');
        }else{
            return back();
        }

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function verify($token)
    {
        //
    }
}

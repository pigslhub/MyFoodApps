<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function create()
    {
        $admins = DB::table('admins')->where('type', '=', '0')->get();
        return view('admin.auth.register', ['admins' => $admins]);
    }

    public function store(Request $request)
    {
        DB::table('admins')->insert([
            'name' => $request->admin_name,
            'email' => $request->admin_email,
            'password' => Hash::make($request->admin_password),
        ]);
        return redirect()->route('admin.create')->with("success", "Admin created successfully");
    }

    public function edit($id)
    {

        $admin = DB::table('admins')
            ->where('id', '=', $id)
            ->first();
        return view('admin.auth.edit', ["admin" => $admin]);
    }

    public function update(Request $request, $id)
    {
        if ($request->admin_password == '') {
            DB::table('admins')->where("id", '=', $id)
                ->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                ]);
        } else {

            DB::table('admins')->where("id", '=', $id)
                ->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                    'password' => Hash::make($request->admin_password),
                ]);
        }

        return redirect()->route('admin.create')->with('success', "Admins updated successfully");
    }






    public function destroy($id)
    {
        DB::table('admins')->where('id', $id)->delete();
        return redirect()->route('admin.create')->with("info", "Admin deleted");
    }

    public function activateAdmin($id){
        DB::table('admins')->where('id', $id)->update(["status"=>"1"]);
        return redirect()->route('admin.create');
    }
    public function deactivateAdmin($id){
        DB::table('admins')->where('id', $id)->update(["status"=>"0"]);
        return redirect()->route('admin.create');
    }
}

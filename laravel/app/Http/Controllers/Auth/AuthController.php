<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
//use Hash;

class AuthController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */
//
    public function login_index()

    {

        return view('signin');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function register()

    {

        return view('signup');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function login(Request $request)

    {

//        $request->validate([
//
//            'email' => 'required',
//
//            'password' => 'required',
//
//        ]);
//        dd($request->all(), User::where('email', $request->email)->first());
        $credentials = $request->only('email', 'password');
////        dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')

                ->withSuccess('You have Successfully loggedin');

        }
//
//        return redirect("signin")->withSuccess('Oppes! You have entered invalid credentials');
//        $user = User::where('email', $credentials['email'])->first();

//        dd($user->password,$credentials['password']);
//        dd(Hash::check($credentials['password'], $user->password),
//            $credentials['password'],
//            $user->password, Hash::make($credentials['password']),
//            Hash::check($credentials['password'], Hash::make($credentials['password'])
//        ));
//        if (!$user || !Hash::check($credentials['password'], $user->password)) {
//            return back()->withErrors([
//                'email' => 'The provided credentials do not match our records.',
//            ]);
//        }
//
//        Auth::login($user);

        return redirect()->intended('dashboard');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function registration(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6',

        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect("signin")->withSuccess('Great! You have Successfully signup');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function dashboard()

    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function profile(){
        if(Auth::check()){
            return view('profile');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function search()

    {
        if(Auth::check()){
            return view('search');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function follow_up()

    {
        if(Auth::check()){
            return view('follow-up');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function calendar()

    {
        if(Auth::check()){
            return view('calendar');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function reports_tenders()

    {
        if(Auth::check()){
            return view('tenders');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function reports_convenio()

    {
        if(Auth::check()){
            return view('convenio');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }

    public function configuracion()

    {
        if(Auth::check()){
            return view('configuracion');
        }
        return redirect("signin")->withSuccess('Opps! You do not have access');
    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create(array $data)

    {
//        dd($data['password']);
        $password = Hash::make($data['password']);

        return User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => $password

        ]);
//        dd($password);

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function logout() {

        Session::flush();

        Auth::logout();

        return Redirect('signin');

    }

    public function scrap(Request $request){
        dd($request);
    }

}

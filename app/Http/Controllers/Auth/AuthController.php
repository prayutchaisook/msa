<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $username = 'username';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|email|max:25|unique:username',
            'password' => 'required|confirmed|min:6',
        ]);
    }
  
    protected function authenticated( $request, $user)
    {
               //request api token from api serice
                $url = env('API_URL')."/request_token";   
                //url-ify the data for the POST
                $fields_string ="username=".$request->username."&password=".$request->password;
                //open connection
                $ch = curl_init();
                $header[] = 'Content-length: 0 
                             Content-type: application/json';
                //set the url, number of POST vars, POST data
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_HEADER,  0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //execute post
                $result = curl_exec($ch);
                $return_http_status=curl_getinfo($ch);
               
                switch ($return_http_status['http_code'])
                {
                  case "200": //HTTP 200 สร้างเก็บ Token เพื่อเรียกใช้งาน api ต่อไป
                              if(($resul_json=json_decode($result))==FALSE)
                              {
                                 echo "JSON IS INVALID";
                              }
                             
                             $request->session()->put('jwt_token',$resul_json->token);
                             break;    
                  default :  print_r($return_http_status); die();
                }
           
                //close connection
                curl_close($ch);  
      
                
        if($user->admin) {
          
             return redirect('/admin');
        }
    
        
        return redirect()->intended('/');
        
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

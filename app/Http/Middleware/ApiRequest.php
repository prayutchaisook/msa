<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if ($request->is('api/request_token')) {//check ถ้าเป็น การขอ request_token ไม่ต้องเช็ค api_token ของ api
    
           $credentials = $request->only('username', 'password');
        //   print_r($credentials);
         //  die();
          // $credentials=array('email'=>'api@a.com','password'=>'123456');
         
            try {
                // attempt to verify the credentials and create a token for the user
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['Status'=>401,'Message' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) {
                // something went wrong whilst attempting to encode the token
                return response()->json(['Status'=>500,'Message' => 'could_not_create_token'], 500);
            }

            // all good so return the token
           return response()->json(compact('token'));
        

            //  return $next($request);
       }
        
      return $next($request);

       
       
    }
}

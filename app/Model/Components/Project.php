<?php

namespace App\Model\Components;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public static function getProject($jwt_token)
    {
                $url = env('API_URL')."/projects?token=".$jwt_token;   
                $ch = curl_init();
                //set the url, number of POST vars, POST data
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //execute post
                $result = curl_exec($ch);
                $return_http_status=curl_getinfo($ch);
                curl_close($ch);  
                if($return_http_status['http_code']=="200")
                {
                     if(($result_json=json_decode($result)))
                     {
                       return array("status"=>true,"projects"=>$result_json);
                     }
                }
                else
                {
                     return array("status"=>false,"error"=>$return_http_status,json_decode($result));
                
                }
                
                //close connection
                
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserApiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('jwt');
    }
    public function getUser($user_id=null)
    {
        $user=array(
                    array("user_id"=>"01","name"=>"user 01"),
                    array("user_id"=>"02","name"=>"user 02"),
                    array("user_id"=>"03","name"=>"user 03")
            );
        if(!is_null($user_id))
        {
            $user_find= array_search($user_id,array_column($user,'user_id'));
          
            if(array_key_exists("".$user_find, $user))
            {
              $user= $user[$user_find];
               return response(array('Resource' => 'User','Method'=>'get','user'=>$user),200);
            }
            else
            {
              return response(array('Resource' => 'User','Method'=>'get','user'=>null),200);
            }
           
        }
           return response(array('Resource' => 'User','Method'=>'get','user'=>$user),200);
    }
    public function getUserProject(Request $request,$user_id,$project_id=null)
    {
        $limit=$request->input('limit');
        $project=array(
                        array('project_id'=>'1','project_name'=>'project_name1'),
                        array('project_id'=>'2','project_name'=>'project_name2')
                      );
        $user=array("user_id"=>$user_id,"name"=>"user ".$user_id,"project"=>$project);
        
        
        if(!is_null($project_id))
        {
            $project=$project[1];
        }
        
        return response(array('Resource' => 'User','Method'=>'getUserProject','user'=>$user),200);
    }
}

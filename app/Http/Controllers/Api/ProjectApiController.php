<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }
    public function getProject($project_id=null)
    {
        $projects=array(
                         "1"=>array('id'=>'1','name'=>'project_name1'),
                         "2"=>array('id'=>'2','name'=>'project_name2'),
                       );
        
       if(!is_null($project_id))
       {
           $projects=$projects[$project_id];
       }
        
        return response()->json(array("projects"=>$projects));
    }
    public function postCreateProject(Request $request)
    {
   
        $input=$request->except(['api_token']);
        return response(array('component' => 'Project','function'=>'create','data'=> $input),201);
    }
    public function putUpdateProject(Request $request)
    {
   
        $input=$request->except(['api_token']);
        return response(array('component' => 'Project','function'=>'update','data'=> $input),200);
    }
    public function deleteProject($project_id)
    {
       
        return response(array('component' => 'Project','function'=>'delete','project_id'=>$project_id),200);
    }
    
}

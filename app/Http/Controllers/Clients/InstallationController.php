<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Model\Components\Project as Project;
class InstallationController extends Controller
{
    protected $jwt_token;
    public function __construct(Request $request)
    {
        $this->middleware('clients');
        $this->jwt_token=$request->session()->get('jwt_token');
    }
    public function showMain()
    {
        return view('clients.installation.main');
    }
    
    //AJAX function
    public function ajax_GetProject(Request $request)
    {
       $projects= Project::getProject($this->jwt_token);
       if($projects['status'])
       {
           // print_r($projects);
           return response()->json(['Status'=>200,$projects['projects']], 200);
       }
       else
       {
          return response()->json($projects);
         
       }
                //request api token from api serice
              
    }

}

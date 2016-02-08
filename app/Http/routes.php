<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//===============================***WEB SECTION***===============================>
Route::group(['middleware' => ['web']], function () {
         Route::auth();
         Route::get('/','Clients\ClientsController@showMain');
      
         //DEFAULT CLIENTS LANDING PAGE 
          Route::group(['prefix' => 'clients','namespace'=>'Clients','middleware'=>['clients']], function () {
             
              Route::get('/','ClientsController@showMain');
              //CLIENTS COMPONENTS     
              Route::group(['prefix' => 'installation'], function () {
                    Route::get('/','InstallationController@showMain');
                    
                   //installation ajax request
                    Route::group(['prefix' => 'ajax'], function () {
                        Route::get('/projects','InstallationController@ajax_GetProject');
                   });//--installation ajax request
                   
              });//--CLIENTS COMPONENTS
         });
         

         //ADMIN LANDING PAGE
         Route::group(['prefix' => 'admin','middleware'=>['admin']], function () {
                Route::get('/','Admin\AdminController@showPortal');
                Route::get('/profile','Admin\AdminController@showProfile');
         });

});
//<============================***END WEB SECTION***===============================>




//<===============================***API SECTION***===============================>
Route::group(['prefix'=>'api','middleware'=>'jwt'],function(){
       //LANDING API PAGE
       Route::post("/request_token",function(){
        
       });
       
        
         //PROJECTS RESOURCE
         Route::group(['prefix' => 'projects','namespace'=>'Api'], function () {
                Route::get('/','ProjectApiController@getProject');
                Route::get('/{project_id}','ProjectApiController@getProject');
                Route::post('/','ProjectApiController@postCreateProject');
                Route::put('/','ProjectApiController@putUpdateProject');
                Route::delete('/{project_id}','ProjectApiController@deleteProject');
               
         });//--PROJECTS RESOURCE
         
         //USERS RESOURCE
         Route::group(['prefix' => 'users','namespace'=>'Api'], function () {
                Route::get('/','UserApiController@getUser');
                Route::get('/{user_id}','UserApicontroller@getUser');
                Route::get('/{user_id}/projects','UserApicontroller@getUserProject');
                Route::get('/{user_id}/projects/{project_id}','UserApicontroller@getUserProject');
               
         });//--USERS RESOURCE
});

//<===============================***END API SECTION***===============================>


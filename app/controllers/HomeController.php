<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
        
        public function loginAction()
        {
            
           $userId= Input::get('userId');
           $password=Input::get('password');
           $salt='samar';
           $checkPassword=$password.$salt; 
//         $hashPassword=Hash::make($password.$salt);
//         DB::table('mobileTable')->insert(array('userId'=>$userId,'password'=>$hashPassword));
          $row=DB::table('mobileTable')->where('userId',$userId)->first();
         
          if($row){
          if (Hash::check($checkPassword, $row->password))
          {return 'hello Admin!!';}   
                
           else 
             {echo'heeeee';
             return Redirect::to('login')->with('check','T');}
             
          }else
          {echo'heeeee';
              return Redirect::to('login')->with('check','T');}
          
          
        }
        
}

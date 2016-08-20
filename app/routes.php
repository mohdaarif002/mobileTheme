<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('practiceBootstrap',function(){
    
   return View::make('magicBootstrap'); 
});
        

Route::get('contact',function(){
    
 return 'You can contact here: 9716238591 & aarif75375@gmail.com';   
});

Route::get('projects',function(){
    
 return 'You can have a look at them in my github account: https://github.com/mohdaarif002';   
});

Route::get('about',function(){
  return 'There is nothing special to know about me.';  
});

Route::get('login',function(){
 return View::make('login');  
});

Route::post('loginAction','HomeController@loginAction');

Route::get('lazy',function(){
    
return View::make('index2');
});
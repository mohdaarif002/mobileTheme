<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('practiceBootstrap',function(){
    
   return View::make('magicBootstrap'); 
});
        


<?php> 
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', function () { 
    return view('welcome'); 
}); 
 
Route::get('/login', function () { 
    return view('auth.login'); 
}); 
 
Route::post('/login', function () { 
    return redirect('/dashboard'); 
}); 
 
Route::get('/dashboard', function () { 
    return view('dashboard'); 
}); 

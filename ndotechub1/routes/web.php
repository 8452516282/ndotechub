<?php



use Illuminate\Support\Facades\Route;


use App\Livewire\DriverDetails;
use App\Livewire\ForgotPassword;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\Navbar;
use App\Livewire\SideBar;
use App\Livewire\SignUp;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sidebar',SideBar::class);
Route::get('/navbar',Navbar::class);
Route::get('/drivers',DriverDetails::class);
Route::get('/login',Login::class);
Route::get('/register',SignUp::class);
Route::get('/home',HomePage::class);
Route::get('/forgotpasswrd',ForgotPassword::class);
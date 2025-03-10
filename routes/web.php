<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/profile', function () {
  return view('/profile');
});

// Or you can do it like this;

Route::view('/dashboard', 'dashboard');

/**
 * When it's inside a folder "The view is inside a folder"
 * First you can make the view using " php artisan make:view posts.create" => using (dot notation)
 * And then call it using also (dot notation).
 */
Route::view('/posts', 'posts.create');
/**
 * Let's go with passing data
 */

class User
{
  public $username;

  public $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }
}



Route::get('/data', function () {
  $user = new User('Ahmed Osama', 'ahmed@gmail.com');


  // return view('data', ['user' => $user]);

  // OR there is a helper function makes passing data much easier => "compact()"
  // return view('data', compact('user'));

  // And also you can add more variables => "By channing it with '->with()' method "
  return view('data', compact('user'))->with('status', 'active');
});

/**
 * To share the same data among the Views 
 * We use "AppServiceProvider.php" file in the "app/Providers/"
 * In the boot method
 */

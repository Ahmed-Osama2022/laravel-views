<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; // NOTE: This is my import to use it for sharing data among Views!
use Illuminate\Support\ServiceProvider;

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


class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    $user = new User('Ahmed Osama', 'ahmed@gmail.com');

    View::share(compact('user'));

    $count = 20;

    View::share(compact('count'));
  }
}

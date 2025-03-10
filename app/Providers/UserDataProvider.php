<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; // NOTE: This is my import to use it for sharing data among Views!
use Illuminate\Support\ServiceProvider;

class Car
{
  public $carname;

  public $motorsize;

  public function __construct($carname, $motorsize)
  {
    $this->carname = $carname;
    $this->motorsize = $motorsize;
  }
}


class UserDataProvider extends ServiceProvider
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
    $car = new car('Toyota', '1600cc');

    View::share(compact('car'));


    /**
     * New method => (Composer views)
     */
    view()->composer(['composer', 'data'], function ($view) {
      $view->with('composerData', ['username' => 'Ahmed', 'phoneNum' => '01211383010']);

      // dd($view);
    });
  }
}

<?php 

namespace tritilitytest\matthewcsvtest;

use Illuminate\Support\ServiceProvider;

class MatthewCSVTestServiceProvider extends ServiceProvider {

   /**
    * Bootstrap the application services.
    *
    * @return void
    */
   public function boot() {
      if ($this->app->runningInConsole()) {
         $this->commands([
            GenerateCSV::class
         ]);
     }
   }

   /**
    * Register the application services.
    *
    * @return void
    */
   public function register() {
      //Register package routes
      include __DIR__.'/routes.php';
      $this->app->make('tritilitytest\matthewcsvtest\MatthewCSVTestController'); 
  }

}
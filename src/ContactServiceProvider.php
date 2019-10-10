<?php
/**
 * Created by PhpStorm.
 * User: Yasmeen
 * Date: 10/1/2019
 * Time: 10:19 AM
 */

namespace Yasmine\Contact;


use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
      public function boot() {

          $this->loadRoutesFrom(__DIR__. '/routes/web.php');
          $this->loadViewsFrom(__DIR__. '/views','contact');
          $this->loadMigrationsFrom(__DIR__. '/database/migrations');
          $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');
          $this->publishes([__DIR__ . '/config/contact.php' => config_path('contact.php')]);

      }

      public function register() {

      }
}
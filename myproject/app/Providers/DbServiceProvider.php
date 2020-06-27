<?php

namespace App\Providers;

use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class DbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //dd('salam...');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
     //   Schema::defaultStringLength(env('DB_STRING_LENGTH',255));
        //Schema::enableForeignKeyConstraints();
        //Paginator::defaultView('paginator');

      //  Relation::morphMap([
      //      'user'=>User::class,
       //     'post'=>Post::class,
       // ]);
    }
}

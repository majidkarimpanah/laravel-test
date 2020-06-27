<?php

namespace App\Providers;


use App\connection\DbConnection;
use App\connection\MysqlConnection;
use App\connection\SqliteConnection;
use App\Http\Controllers\HomeController;
use App\Post;
use App\Test\Foo;
use App\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Relation::morphMap([
            'user'=>User::class,
            'post'=>Post::class
        ]);

       // app()->singleton(DbConnection::class,SqliteConnection::class);
       /* $this->app->bind(DbConnection::class,function (){
            $connection=new SqliteConnection();
            return $connection;
        });*/
        //$connection=new SqliteConnection();
     //   $this->app->instance(DbConnection::class,$connection);

        //$this->app->when(HomeController::class)->needs('$name')->give('reza');
       // $this->app->when(\App\connection\User::class)->needs(DbConnection::class)->give(MysqlConnection::class);
       // $this->app->resolving(function ($obj,$app){
        //});
       /* $this->app->singleton('foo',function (){
            return new Foo();
        });*/

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}

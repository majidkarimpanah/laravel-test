<?php

namespace App\Providers;

use App\connection\DbConnection;
use App\connection\SqliteConnection;
use Illuminate\Support\ServiceProvider;

class ConnectionServiceProvider extends ServiceProvider
{
   // protected $defer=true;
   /* public $singletons=[
        DbConnection::class=>SqliteConnection::class,
    ];*/
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton(DbConnection::class,SqliteConnection::class);
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
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

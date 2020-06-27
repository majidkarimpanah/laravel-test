<?php

namespace App\Http\Controllers;

use App\connection\User;
use App\Event\RegisterUser;
use App\Post;
use App\Profile;
use App\Rate;
use App\Tag;
use Carbon\Carbon;
use foo\Foo;
use function foo\func;
use FooFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Class_;
use PhpParser\Comment;
use function Sodium\increment;

class HomeController extends Controller
{
   /* public function __construct(string $name)
    {
        dd($name);
    }*/
   // public function index(User $user)
   // {
        // $connection=new MysqlConnection();
        // $connection=new SqliteConnection();
        //$user=new User($connection);
        //$user2 = app(User::class);
        //dd($user);
    //}

    public function index()
    {



       /* $post=Post::find(1);
        $comment=new \App\Comment();
        $comment->post_id=10;
        $comment->description='desc21';
        $comment->status=1;
        $post->comments()->save($comment);*/

/*        $post=new Post();
        $post->title='majidtitle34';
        $post->body='majidbody34';
        $post->save();
        $tag=new Tag();
        $tag->title='majidtitle34';
        $tag->slug='majidslug34';
        $post->tags()->attach($tag);*/

        /*$user=\App\User::find(1);*/
   /*     $post=new Post();
        $post->title='salamtitle';
        $post->body='salambody';
        $user->posts()->save($post);*/
/*   $post=new Post();
   $post->title='salam title30';
   $post->body='salam body30';
   $user->posts()->save($post);*/



       /* $rate=\App\Rate::find(6);
        return $rate->rateable;*/

      /* $user=\App\User::find(3);
       return $user->rates->count();*/


       //return  $user->posts;
     //   $name=\App\Test\Foo::getName();
        //$name= \App\Test\FooFacade::harchi('sayad',1);
     /*   $name=\App\Test\FooFacade::getName();
        dd($name);*/
    }
}

//app()->singleton(DbConnection::class,SqliteConnection::class);
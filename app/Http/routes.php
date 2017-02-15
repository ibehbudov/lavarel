<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('insert', function(){
//
//	$user = App\User::find(1);
//
//	$address = new App\Address([
//			'name'	=>	'Z.Qasimov 38'
//		]);
//
//	$user->address()->save($address);
//
//});
//
//Route::get('update', function(){
//
//	$address = App\Address::whereUserId(1)->first();
//
//	$address->name = 'This is new address';
//
//	$address->save();
//
//});
//
//Route::get('read', function(){
//
//	$user = App\User::find(1);
//
//	echo $user->address->name;
//
//});
//
//Route::get('delete', function(){
//
//	$user = App\User::find(1);
//
//	$user->address()->delete();
//
//});
//
//Route::get('insert2', function(){
//
//	$user = App\User::find(1);
//
//	$address = new App\Address(['name'	=>	'Z.Qasimov']);
//
//	$user->address()->save($address);
//
//});
//
//Route::get('insert_onetomany', function(){
//
//	$user = App\User::find(1);
//
//	$post = new App\Post([
//			'title'	=>	'Post title',
//			'body'	=>	'Post body'
//		]);
//
//	$user->posts()->save($post);
//
//});
//
//Route::get('update2', function(){
//
//	$user = App\User::find(1);
//
//	$user->whereId(1)->update(['name'	=>	'aaazzz']);
//
//});
//
//Route::get('insert_role', function(){
//
//	$user = App\User::find(1);
//
//	// $role = new App\Role(['name'	=>	'Administrator']);
//
//	// $user->role()->save($role);
//
//	$user->roles()->create(['name'	=>	'ooooo']);
//
//});
//
//Route::get('update_many', function(){
//
//	$user = App\User::find(1);
//
//	if($user->has('roles'))
//	{
//		foreach ($user->roles as $role)
//		{
//			if($role->name == 'Administrator')
//			{
//				$role->name = 'Subscriber';
//
//				$role->save();
//			}
//		}
//	}
//
//});
//
//Route::get('delete_many', function(){
//
//	$user = App\User::find(1);
//
//	foreach ($user->roles as $role)
//	{
//		$role->pivot->delete();
//	}
//
//});
//
//Route::get('attach', function(){
//
//	$user = App\User::find(1);
//
//	$user->roles()->attach([1,2,6]);
//
//});
//
//Route::get('add_staff_photo', function(){
//
//	$staff = App\Staff::find(1);
//
//	$photo = new App\Photo(['path'	=>	'xxx.avi']);
//
//	$staff->photos()->save($photo);
//
//});
//
//Route::get('update', function(){
//
//	$staff = App\Staff::find(1);
//
//	$photo = $staff->photos()->whereId(2)->first();
//
//	$photo->path = 'new_path.jpg';
//
//	$photo->save();
//
//});
//
//Route::get('delete_photo', function(){
//
//	$staff = App\Staff::find(1);
//
//	$staff->photos()->whereId(2)->delete();
//
//});
//
//Route::get('assign', function(){
//
//	$staff = App\Staff::find(1);
//
//	$photo = App\Photo::find(4);
//
//	$staff->photos()->save($photo);
//});
//
//Route::get('polymorphic_1', function(){
//
//	$post = App\Post::find(1);
//
//	$tag  = App\Tag::find(1);
//
//	$post->tags()->save($tag);
//
//});
//
//
//
//Route::get('read/{id}', function($id){
//
//	$post = App\Post::find($id);
//
//	// $tag = App\Tag::find(3);
//
//	// $post->tags()->save($tag);
//
//	// $post->tags()->attach(2);
//
//
//
//});
//
//
//
//
//Route::get('get_user_post_tags', function(){
//
//	$user = App\User::find(1);
//
//	foreach ($user->posts as $post)
//	{
//		$post = App\Post::find($post->id);
//
//		foreach ($post->tags as $tag)
//		{
//			$tag->pivot->delete();
//		}
//	}
//
//});

//Route::get('get_tags', function(){
//
//    $post = App\Post::find(1);
//
//    $tag = App\Tag::find(3);
//
//    $post->tags()->save($tag);
//
//});


// Route::get();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::get('admin/user/roles', ['middleware' => ['web', 'auth', 'role'], function (){
//    return 'admin is logged';
//}]);

//Route::group(['middleware' => ['web']], function () {
//
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//
//
//    Route::get('check', function(){
//        if(Auth::check())
//        {
//            return 'oooo';
//        }
//    });
//
//    Route::get('login2', function (){
//        $username = 'Ibrahim Behbudov';
//        $password = 'dosi3048857';
//        if(Auth::attempt([
//            'name'      =>  $username,
//            'password'  =>  $password
//        ]))
//            {
//                return redirect()->intended('admin');
//            }
//    });

//    Route::get('admin', function (){
//        if(Auth::check())
//        {
//            return 'admin logged in. name is'. Auth::user()->name;
//        }
//        else
//        {
//            return 'you are not logged in';
//        }
//    });

//    Route::get('isadmin', function(){
//
//        $user = Auth::user();
//
//        if($user->isAdmin())
//        {
//            return 'You are admin and your name is '.$user->name;
//        }
//        else
//        {
//            return 'You are not admin';
//        }
//
//    });

//    Route::get('date', function (){
//        return Carbon::now()->addDays(2)->addHours(99)->diffForHumans();
//    });
//
//    Route::get('get_name', function(){
//
//        $user = App\User::find(1);
//
//        return $user->email;
//    });
//
//    Route::get('posts/deleted', 'PostController@deleted');
//
//    Route::get('posts/restore/{id}', 'PostController@restore');
//
//    Route::resource('posts', 'PostController');

//    Route::get('admin', 'AdminController@index');
//
//});
//Route::group(['middleware' => 'web'], function (){
//    Route::auth();
//    Route::get('admin', 'AdminController@index');
//    Route::get('/home', 'HomeController@index');
//});

Route::get('send_mail', function (){
    $data = [
        'title' =>  'This is title',
        'body'  =>  'BIody'
    ];
    Mail::send('mails.example', $data, function ($message){
        $message->to('bkj9akwuq74f@mail.ru', 'Ibrahim')->subject('Salam Balabey');
    });
});





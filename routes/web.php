<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Simple routes
Route::get('/', function () {
    return view('welcome');
});

// Route::view('/about-us','about',['message' => "This is about us message", 'name' => "Akshay shah"])->name('about');

// Route::get('/about', function(){
//     return view("about");
// });

// Route::get('/contactus', function(){
//     echo "This is contactus page";
// });

// Route::get('/number', function(){
//     return [12,15,20,24];
// });

// //Peramitterized route

// Route::get('/country/{name}', function($country){
//     return "Welcome to $country";
// });

// //Peramitterized route with ottional



// Route::get('/customer/{name?}', function($name = "Guest"){
//     return "Welcome to $name";
// });

// //Request Perameter

// Route::get('/search', function(Request $request){
//     return $request->all();

// });

// //named route
// Route::get('/user/welcome', function(){
//     echo "<a href='".route('buy')."' >buy</a>";
//     echo "<ui>";
//     $countries = ["326587587"=>"India", "545879587"=>"Us", "921548795848"=>"UAE", "87458745895"=>"China", "Pakistan"];
//     foreach ($countries as $key => $country) {
//         echo "<li><a href='".route('country',[$country,"papulation" => $key])."' >$country</a></li>";
//     }
//     echo "</ui>";
// })->name('welcome');

// Route::get('/user/buy', function(){
//     echo "<a href='".route('welcome')."' >welcome</a>";
// })->name('buy');

// Route::get('/country/{name}', function($name){
//     return "Welcome to $name Our papulation is ".request('papulation');
// })->name('country');

// //group route user
// Route::name('user.')->prefix('user')->group(function(){
//     Route::get('login')->name('login');
//     Route::get('logout')->name('logout');
//     Route::get('register')->name('register');
//     Route::get('dashboard')->name('dashboard');
//     Route::get('setting')->name('setting');
//     Route::get('profile')->name('profile');
// });

// //group route admin
// Route::name('admin.')->prefix('admin')->group(function(){
//     Route::get('login')->name('login');
//     Route::get('logout')->name('logout');
//     Route::get('register')->name('register');
//     Route::get('dashboard')->name('dashboard');
//     Route::get('setting')->name('setting');
//     Route::get('profile')->name('profile');
// });

// Route::get('/frontend/about', [PageController::class,'about'])->name('page.about');
// Route::get('/frontend/service', [PageController::class,'service'])->name('page.service');
// Route::get('/frontend/home', [PageController::class,'home'])->name('page.home');
// Route::get('/frontend/profile', [PageController::class,'profile'])->name('page.profile');
// Route::get('/frontend/contactus', [PageController::class,'contactus'])->name('page.contactus');

Route::name('page.')->prefix('frontend')->group(function(){
    Route::get('/about', [PageController::class,'about'])->name('about');
    Route::get('/service', [PageController::class,'service'])->name('service');
    Route::get('/home', [PageController::class,'home'])->name('home');
    Route::get('/profile', [PageController::class,'profile'])->name('profile');
    Route::get('/contactus', [PageController::class,'contactus'])->name('contactus');
    //Singleton controller
    Route::match(['get','post'],'/upload',UploadController::class)->name('upload');
});

//Resource controller
//creating own method this put before from resource route
route::get("/posts/filters",[PostController::class, 'filters'])->name("posts.filters");
Route::resource('/posts', PostController::class);
//when change default resourse route name method then it is put below resourse route
Route::get('/posts',[PostController::class,'posts'])->name('posts.posts');


<?php

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

Route::get('/', function () {
    $list = [
    	"First list item",
    	"Second list item",
    	"third List item"
    ];
    
    return view('welcome', [
    	'name' => "Tom", 
    	'chores' => $list, //variable => value 
    ]); //pass data as a normal PHP array, no need to define new variables on the view pages 
});

Route::get('/about', function() {
	$user_list = DB::table('users')->get(); //this fetches all the rows of the table


    // return view('about')->with('users', compact($user_list)); //another method to pass data to the view
    return view('about', [
            'users' => $user_list,
            'tester' => "test data to check routing"
        ]);
});

Route::get('/users', 'UserController@index');
Route::get('/users/{name}', function($name) {
    // dd($name);
    $user = DB::table('users')->where('name' , '=' , $name)->first();
    return view('user_page',[
            'user' => $user
        ]);
});

//you can either return a function that will give you the direct php file or call a controller that actually accept the argument as `about` and return you the proper method that takes care of the invariants 


/**

this section will highlight the different sort of commands that you can use with laravel to access rows/values:

    //selecting specific columns is also easy using the select command; list objects will only have the specified columns 
    //to select data with a user specified raw SQL command, we can use the DB::raw method 
    $users = DB::table('table_name')->select(DB::raw('raw statement'))->get();

    //all these queries return a list of JSON objects 
    //iterate through them accordingly 

    //getting all the rows === select * from `table_name` 
    DB::table('table_name')->get();

    //getting only a particular row === select * from `table_name` WHERE `field` = 'value'
    DB::table('table_name')->where('field' . 'value')->first(); //first returns only the first matched query, obviously will return the asec first query 

    //for single column value for a record(s) 
    DB::table('table_name')->where('field' . 'value')->value('email');

    //retrieving only a single column as a list 
    DB::table('table_name')->pluck('title');

    $users = DB::table('users')->where([ 
    ['status', '=', '1'],
    ['subscribed', '<>', '1'],
    ])->get();

**/
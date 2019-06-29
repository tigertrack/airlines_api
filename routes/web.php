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
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $fri = App\fri::all();
        return view('dashboard', compact('fri'));
    })->name('dashboard');

    Route::get('/edit/{id}', function ($id){
        $fri = App\fri::find($id);
        $airlines = App\airlines::all();
        return view('edit', compact(['fri', 'airlines']));
    });

    Route::post('/update', function(request $request){
        App\fri::where('uniqueID', $request->id)
            ->update([
                'AIRLINE_CODE' => $request->airline,
                'ACTUAL_CLAIM' => $request->claim
            ]);
        return redirect()->route('dashboard');
    });



    Route::get('/reclaim/{id}', function ($id) {
        App\fri::where('UniqueID', $id)
            ->update([
                'RECLAIM_FIRST_BAG_TIME' => date('Y-m-d h:i:s')
            ]);
            return redirect()->route('dashboard');
    });

    Route::get('logout', function(){
        Auth::logout();
        return redirect()->route('login');
    });
});

Route::post('/auth', function(request $request){
    $id = App\User::where('email', $request->email)
        ->where('password', md5($request->password))
        ->first();
    
    $user = App\user::find($id->id_admin);

    Auth::login($user);

    return redirect()->route('dashboard');
    
});

Route::get('/login', function(){
    return view('login');
})->middleware('guest')->name('login');
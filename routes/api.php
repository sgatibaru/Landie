<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Tenants;

Route::get('/data',function(){

	$tenants = Tenants::all()->toJson();
	return response($tenants,200)->header('Content-Type', 'application/json');

});

Route::post('/data/create',function(Request $req){

    //data request from client side should be looked like this
	//{"name":"a"}
	//[{"name":"b"},{"name":"c"}]

	$data = $req->json()->all();

	$item = new tbitem();

	$item->name = $data['name'];

	$item->save();

	return response(($result === true ? 'succeed':'failed'),200)->header('Content-Type', 'application/json');

});


Route::put('/data/update',function(Request $req){

    $data = $req->json()->all();

	$item = Tenants::find($data['id']);

	$item->name = $data['name'];

    $item->save();

	return response(($result === true ? 'succeed':'failed'),200)->header('Content-Type', 'application/json');

});


Route::delete('/data/delete',function(Request $req){

    $data = $req->json()->all();

	$result = Tenants::destroy($data['id']);

	return response(($result === true ? 'succeed':'failed'),200)->header('Content-Type', 'application/json');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

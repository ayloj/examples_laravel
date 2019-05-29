<?php

use Illuminate\Http\Request;
//Utilizando el modelo
use App\Product;
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
    return view('welcome');
});

Route::get('avis', function () {
    return view('avis.index');
});

Route::middleware('auth')->group(function (){

    Route::get('products', function(){
        $products = Product::all();
        return view('products.index', compact('products'));
    })->name('products.index');

    Route::get('products/create', function(){
        return view('products.create');
    })->name('products.add');

    Route::post('products', function (Request $request){
        $newProduct = new Product;
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');
        $newProduct->save();

        return redirect()->route('products.index')->with('info', 'Productos guardado!');

    })->name('products.store');


    Route::delete('products/{id}', function ($id){
        $product = Product::findOrFail($id);
        $product->delete($id);
        return redirect()->route('products.index')->with('info', 'Producto Eliminado exitosamente!');
    })->name('products.delete');

    Route::get('products/{id}/edit', function ($id){
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    })->name('products.edit');


    Route::put('products/{id}', function (Request $request, $id){
        $product = Product::findOrFail($id);
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index')->with('info', 'Producto actualizado exitosamente');
    })->name('product.update');


});

Auth::routes();

Route::get('testsession/get', 'TestsessionController@accessSessionData');
Route::get('testsession/set', 'TestsessionController@setSessionData');
Route::get('testsession/remove', 'TestsessionController@deleteSessionData');

Route::get('/form', function(){
    return view('formexample');
})->name('formexample');

//Route::get('/home', 'HomeController@index')->name('home');

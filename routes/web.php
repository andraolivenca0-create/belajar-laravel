<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});

//basic
Route::get('/about', function(){
    return '<h1>hallo</h1>'.
    '<br>selamat datang di perpustakaan digital';
});

Route::get('andra', function () {
    return '<h1>Hai :)</h1>'.
            '<br>Perkenalkan Nama Saya andra olivenca'.
            '<br>umur saya 16 dan saya kelas XI RPL 3';
});

Route::get('buku', function () {
    return '<br>ini buku saya';
            
});

Route::get('menu', function () {
    $data = [
        ['nama_makanan'=>'bala_bala','harga'=>1000, 'jumlah'=>10],
        ['nama_makanan'=>'gehu_pedas','harga'=>2000, 'jumlah'=>15],
        ['nama_makanan'=>'cireng_isi','harga'=>2500, 'jumlah'=>5],
    ];
    $resto = "Resto MPL - Makanan Penuh Lemak";
    return view('menu', compact('data','resto'));
});

Route::get('books/{judul}',function($a){
    return 'judul buku :'.$a;
});

Route::get('post/{title}/{category}',function($a,$b){
    return view('post',['judul'=>$a,'cat'=>$b]); 
});

Route::get('profile/{nama?}',function($a='guest'){
    return 'halo nama saya :'.$a;
});

Route::get('test-model', function(){
    $data = App\Models\Post::all();
    return $data;
});

Route::get('create-data ', function(){
    $data = App\Models\Post::create([
        'title'=>'Belajar coading',
        'content'=>'Lorem Ipsum'
    ]);
    return $data;
});

Route::get('show-data/{id}', function ($id) {
    $data = App\Models\Post::find($id);
    return $data;
});

Route::get('edit-data/{id}', function ($id) {
    $data        =App\MOdels\Post::find($id);
    $data->title = "Membangun Project dengan Laravel";
    $data->save();
    return $data;
});

Route::get('delete-data/{id}', function($id) {
        $data = App\Models\Post::find($id);
        $data->delete();

        return redirect('test-model');
});

Route::get('search/{cari}', function($query){
    $data = App\Models\Post::where('title', 'like', '%' . $query . '%')->get();
    return $data;
});
//pemanggilan url menggunakan controller

//controller harus di import dulu
Route::get('greeting', [mycontroller::class, 'hello']);
Route::get('students', [mycontroller::class, 'siswa']);


Route::get('post', [PostController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//post
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');   
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy');   
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');



Route::resource('biodata', BiodataController::class);
<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/about', function() {
//     return '
//     <h1>KELOMPOK 3</h1>
//     <table border=0>
//         <tr>
//         <td>Jasmine Yulis Saputri</td>
//         <td>(082011633001)</td>
//         </tr>
//         <tr>
//         <td>Robanu Dakhayin</td>
//         <td>(082011633027)</td>
//         </tr>
//     </table>
//     ';
// });

Route::get('/description', function () {
    return '
    <h1>DESKRIPSI BUMJ</h1>
    <p>BUMJ memiliki kepanjangan Biro Usaha Milik JIMM merupakan biro yang terdapat
    di organisasi mahasiswa yang berada di Fakultas Sains dan Teknologi (FST) yang bernama JIMM.
    BUMJ bergerak di bidang yang berkaitan dengan usaha dan kewirausahaan. BUMJ sendiri memiliki
    event yang berupa kajian-kajian terkait kewirausahaan. Selain itu, BUMJ juga menjual beberapa
    produk secara online.</p>
    ';
});

Route::get('/home', function() {
    return view('home',[
        'organisasi' => 'BUMJ JIMM FST Universitas Airlangga',
        'alamat' => '@jimmonshop'
    ]);
});

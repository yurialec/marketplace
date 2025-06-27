<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SideBarController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clientes\ClienteController;
use App\Http\Controllers\Clientes\PainelClienteController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'homePage'])->name('site.homePage');
Route::get('/detalhes-produto', [SiteController::class, 'detalhesProduto'])->name('site.detalhesProduto');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/sidebar', [SideBarController::class, 'index'])->name('admin.sidebar');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::prefix('/usuarios')->group(function () {
        Route::get('/', [UsuariosController::class, 'index'])->name('admin.usuarios.index');
        Route::get('/listar', [UsuariosController::class, 'listar'])->name('admin.usuarios.listar');
        Route::get('/{id}/editar', [UsuariosController::class, 'edit'])->name('admin.usuarios.edit');
        Route::delete('/{id}', [UsuariosController::class, 'destroy'])->name('admin.usuarios.destroy');
    });

    Route::prefix('clientes')->group(function () {
        Route::get('/', [ClienteController::class, 'index'])->name('admin.clients.index');
    });
});

Route::prefix('conta')->middleware(['auth'])->group(function () {
    Route::get('/', [PainelClienteController::class, 'index'])->name('cliente.painel.index');
    Route::get('/pedidos', [PainelClienteController::class, 'pedidos'])->name('cliente.painel.pedidos');
    Route::get('/perfil', [PainelClienteController::class, 'perfil'])->name('cliente.painel.perfil');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogosClientController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\ShortcodeController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Las rutas publicas */
Route::get('/', [IndexController::class, 'index'] )->name('index');
Route::get('agradecimiento', [IndexController::class, 'agradecimiento'] )->name('agradecimiento');
Route::get('/nosotros', [IndexController::class, 'index'] )->name('nosotros');
/* Route::get('/servicios', [IndexController::class, 'index'] )->name('servicios'); */
Route::get('/servicios/{id}', [IndexController::class, 'servicios'] )->name('servicios');

Route::post('/subscripciones/guardar', [NewsletterSubscriberController::class, 'saveSubscripciones'])->name('subscripciones.guardar');
Route::post('guardarContactos', [IndexController::class, 'guardarContacto'] )->name('guardarContactos');
Route::get('/blog/{filtro}', [IndexController::class, 'blog'])->name('blog');
Route::get('/post/{id}', [IndexController::class, 'detalleBlog'])->name('detalleBlog');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('admin')->group(function () {
        
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
        Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');

        //messages 
        Route::resource('/mensajes', MessageController::class);
        Route::post('/mensajes/borrar', [MessageController::class, 'borrar'] )->name('mensajes.borrar');

        //Datos Generales
        Route::resource('/datosgenerales', GeneralController::class);

         //shortcode
         Route::resource('/shortcode', ShortcodeController::class);

        //Testimonies
        Route::resource('/testimonios', TestimonyController::class);
        Route::post('/testimonios/deleteTestimony', [TestimonyController::class, 'deleteTestimony'] )->name('testimonios.deleteTestimony');
        Route::post('/testimonios/updateVisible', [TestimonyController::class, 'updateVisible'] )->name('testimonios.updateVisible');

        //Categorías
        Route::resource('/categorias', CategoryController::class);
        Route::post('/categorias/deleteCategory', [CategoryController::class, 'deleteCategory'] )->name('categorias.deleteCategory');
        Route::post('/categorias/updateVisible', [CategoryController::class, 'updateVisible'] )->name('categorias.updateVisible');


        //Servicios
        Route::resource('/servicios', ServiceController::class);
        Route::post('/servicios/deleteService', [ServiceController::class, 'deleteService'] )->name('servicio.deleteService');
        Route::post('/servicios/updateVisible', [ServiceController::class, 'updateVisible'] )->name('servicio.updateVisible');


        //Blog
        Route::resource('/blog', BlogController::class);
        Route::post('/blog/deleteBlog', [BlogController::class, 'deleteBlog'])->name('blog.deleteBlog');
        Route::post('/blog/updateVisible', [BlogController::class, 'updateVisible'])->name('blog.updateVisible');

        //Crud Logos
        Route::resource('/logos', LogosClientController::class);
        Route::post('/logos/deleteLogo', [LogosClientController::class, 'deleteLogo'] )->name('logos.deleteLogo');

        Route::resource('/staff', StaffController::class);
        Route::post('/staff/updateVisible', [StaffController::class, 'updateVisible'])->name('staff.updateVisible');

        //Suscripciones
        Route::get('/subscripciones', [NewsletterSubscriberController::class, 'showSubscripciones'])->name('subscripciones');

        

        Route::fallback(function() {
            return view('pages/utility/404');
        });
        
    });

    
});
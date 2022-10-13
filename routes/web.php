<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SupplyController;

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

  Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

  Route::group(['as'=>'invoice.','prefix'=>'invoice'], function(){
      route::get('/', [InvoiceController::class, 'index'])->name('dashboard_invoice');
      route::get('/edit/{id}', [InvoiceController::class, 'view'])->name('view');
      route::get('/create', [InvoiceController::class, 'create'])->name('create');
      route::post('/store', [InvoiceController::class, 'store'])->name('tiketstore');
  });

  Route::group(['as'=>'finance.','prefix'=>'finance'], function(){
      route::get('/', [InvoiceController::class, 'index_finance'])->name('dashboard_finance');
      route::get('/edit/{id}', [InvoiceController::class, 'view_finance'])->name('view');
      route::get('/add', [InvoiceController::class, 'create_finance'])->name('create_finance');
      route::post('/store', [InvoiceController::class, 'store_finance'])->name('tiketstore');
  });

  Route::group(['as'=>'inventory.','prefix'=>'inventory'], function(){
      route::get('/', [InventoryController::class, 'index'])->name('dashboard_inventory');
      route::get('/edit/{id}', [InventoryController::class, 'view'])->name('view');
      route::get('/createdata', [InventoryController::class, 'create'])->name('create');
      route::post('/store', [InventoryController::class, 'store'])->name('tiketstore');
  });

  Route::group(['as'=>'supply.','prefix'=>'supply'], function(){
      route::get('/air', [SupplyController::class, 'index_air'])->name('dashboard_air');
      route::get('/tool', [SupplyController::class, 'index_tool'])->name('dashboard_tool');
  });



<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;


//car routes

Route::get('cars', [CarController::class, 'index'])->name('cars.index')->middleware('permission:cars.index');
Route::get('cars/create', [CarController::class, 'create'])->name('cars.create')->middleware('permission:cars.index');
Route::post('cars', [CarController::class, 'store'])->name('cars.store')->middleware('permission:cars.index');
Route::get('cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit')->middleware('permission:cars.index');
Route::put('cars/{car}', [CarController::class, 'update'])->name('cars.update')->middleware('permission:cars.index');
Route::get('cars/{car}', [CarController::class, 'show'])->name('cars.show')->middleware('permission:cars.index');
Route::delete('cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy')->middleware('permission:cars.index');
Route::delete('cars/delete/{car}', [CarController::class, 'delete'])->name('cars.delete')->middleware('permission:cars.index');
Route::get('cars/restore/{car}', [CarController::class, 'restore'])->name('cars.restore')->middleware('permission:cars.index');
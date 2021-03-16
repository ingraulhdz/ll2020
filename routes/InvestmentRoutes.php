
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvestmentController;


//investment routes

Route::get('investments', [InvestmentController::class, 'index'])->name('investments.index')->middleware('permission:investments.index');
Route::get('investments/create', [InvestmentController::class, 'create'])->name('investments.create')->middleware('permission:investments.create');
Route::post('investments', [InvestmentController::class, 'store'])->name('investments.store')->middleware('permission:investments.create');
Route::get('investments/{investment}/edit', [InvestmentController::class, 'edit'])->name('investments.edit')->middleware('permission:investments.edit');
Route::put('investments/{investment}', [InvestmentController::class, 'update'])->name('investments.update')->middleware('permission:investments.edit');
Route::get('investments/{investment}', [InvestmentController::class, 'show'])->name('investments.show')->middleware('permission:investments.show');
Route::delete('investments/{investment}', [InvestmentController::class, 'destroy'])->name('investments.destroy')->middleware('permission:investments.delete');
Route::delete('investments/delete/{investment}', [InvestmentController::class, 'delete'])->name('investments.delete')->middleware('permission:investments.delete');
Route::get('investments/restore/{investment}', [InvestmentController::class, 'restore'])->name('investments.restore')->middleware('permission:investments.delete');

<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActivityLogController;


//activity_log routes


Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'create'])->name('activity_logs.create')->middleware('permission:activity_logs.create');

Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index')->middleware('permission:activity_logs.index');
Route::post('activity_logs', [ActivityLogController::class, 'store'])->name('activity_logs.store')->middleware('permission:activity_logs.create');
Route::get('activity_logs/{activity_log}/edit', [ActivityLogController::class, 'edit'])->name('activity_logs.edit')->middleware('permission:activity_logs.edit');
Route::put('activity_logs/{activity_log}', [ActivityLogController::class, 'update'])->name('activity_logs.update')->middleware('permission:activity_logs.edit');
Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show')->middleware('permission:activity_logs.show');
Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy')->middleware('permission:activity_logs.delete');
Route::delete('activity_logs/delete/{activity_log}', [ActivityLogController::class, 'delete'])->name('activity_logs.delete')->middleware('permission:activity_logs.delete');
Route::get('activity_logs/restore/{activity_log}', [ActivityLogController::class, 'restore'])->name('activity_logs.restore')->middleware('permission:activity_logs.delete');
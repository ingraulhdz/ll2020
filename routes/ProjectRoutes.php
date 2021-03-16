
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;


//project routes

Route::get('projects', [ProjectController::class, 'index'])->name('projects.index')->middleware('permission:projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware('permission:projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('permission:projects.create');
Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit')->middleware('permission:projects.edit');
Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update')->middleware('permission:projects.edit');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show')->middleware('permission:projects.show');
Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy')->middleware('permission:projects.delete');
Route::delete('projects/delete/{project}', [ProjectController::class, 'delete'])->name('projects.delete')->middleware('permission:projects.delete');
Route::get('projects/restore/{project}', [ProjectController::class, 'restore'])->name('projects.restore')->middleware('permission:projects.delete');

Route::get('project.donation', [DonationController::class, 'donation']);
Route::get('project.donate', [DonationController::class, 'donate']);
Route::get('projects.investment/{id}', [ProjectController::class, 'investment'])->name('projects.investment');
Route::get('projects.downloadPlanning/{id}', [ProjectController::class, 'downloadPlanning'])->name('projects.downloadPlanning');
Route::get('projects.donar/{id}', [ProjectController::class, 'donar'])->name('projects.donar');
Route::get('projects.activity/{id}', [ProjectController::class, 'activity'])->name('projects.activity');

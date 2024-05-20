<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DesignationsController;
use App\Http\Controllers\Team_MembersController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ViewProjectController;
use App\Http\Controllers\FullCalendarController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/position', function () {
    return view('position');
})->middleware(['auth', 'verified'])->name('position');

Route::get('/roles', function () {
    return view('roles');
})->middleware(['auth', 'verified'])->name('roles');

Route::get('/designations', function () {
    return view('designation');
})->middleware(['auth', 'verified'])->name('designations');

Route::get('/team_members', function () {
    return view('team_members');
})->middleware(['auth', 'verified'])->name('team_members');

Route::get('/getevent', function () {
    return view('fullcalendar');
})->middleware(['auth', 'verified'])->name('getevent');

Route::get('/kanban', function () {
    return view('kanban');
})->middleware(['auth', 'verified'])->name('kanban');

Route::get('/inbox', function () {
    return view('inbox');
})->middleware(['auth', 'verified'])->name('inbox');

Route::get('/compose', function () {
    return view('compose');
})->middleware(['auth', 'verified'])->name('compose');

Route::get('/read-mail', function () {
    return view('read-mail');
})->middleware(['auth', 'verified'])->name('read-mail');

Route::get('/view_project', function () {
    return view('projects');
})->middleware(['auth', 'verified'])->name('projects');

Route::get('/create_project', function () {
    return view('project-add');
})->middleware(['auth', 'verified'])->name('project-add');

Route::get('/project_edit', function () {
    return view('project-edit');
})->middleware(['auth', 'verified'])->name('project-edit');

Route::get('/project-details', function () {
    return view('project-detail');
})->middleware(['auth', 'verified'])->name('project-detail');

Route::get('/Project Management', function () {
    return view('Project Management');
});

Route::get('/Settings', function () {
    return view('Settings');
});

Route::get('/Objective', function () {
    return view('Objective');
});


Route::get('/add/roles', [RolesController::class, 'addRoles'])->name('addRoles');
Route::get('/edit/roles', [RolesController::class, 'editRoles'])->name('editRoles');
Route::get('delete/roles/{id}',[RolesController::class, 'deleteRoles'])->name('deleteRoles');

Route::get('/add/designations', [DesignationsController::class, 'addDesignations'])->name('addDesignations');
Route::get('/edit/designations', [DesignationsController::class, 'editDesignations'])->name('editDesignations');
Route::get('delete/designations/{id}',[DesignationsController::class, 'deleteDesignations'])->name('deleteDesignations');

Route::get('/add/team_members', [Team_MembersController::class, 'addTeam_Members'])->name('addTeam_Members');
Route::get('/edit/team_members', [Team_MembersController::class, 'editTeam_Members'])->name('editTeam_Members');
Route::get('delete/team_members/{id}',[Team_MembersController::class, 'deleteTeam_Members'])->name('deleteTeam_Members');

Route::middleware('auth')->group(function () {
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::Post('/roles', [RolesController::class, 'store'])->name('roles.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/designations', [DesignationsController::class, 'index'])->name('designations.index');
    Route::Post('/designations', [DesignationsController::class, 'store'])->name('designations.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/team_members', [Team_MembersController::class, 'index'])->name('team_members.index');
    Route::Post('/team_members', [Team_MembersController::class, 'store'])->name('team_members.store');
});

Route::middleware('auth')->group(function () {
    Route::Post('/create_project', [ProjectController::class, 'create'])->name('create_project');
});

Route::middleware('auth')->group(function () {
    Route::delete('/projects/{project}/delete', [ProjectController::class, 'delete'])->name('delete.project');
    Route::get('/projects/{project/edit}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('project.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/view_project', [ViewProjectController::class, 'index'])->name('projects');

});

Route::middleware('auth')->group(function () {
    Route::get('/getevent', [FullCalendarController::class, 'getEvent'])->name('getevent');
    Route::post('/createevent',[FullCalendarController::class, 'createEvent'])->name('createevent');
    Route::post('/deleteevent',[FullCalendarController::class, 'deleteEvent'])->name('deleteevent');
});

Route::middleware('auth')->group(function () {
    Route::get('/getevent', [FullCalendarController::class, 'getEvent'])->name('getevent');
    Route::post('/createevent',[FullCalendarController::class, 'createEvent'])->name('createevent');
    Route::post('/deleteevent',[FullCalendarController::class, 'deleteEvent'])->name('deleteevent');
    Route::post('/updateevent',[FullCalendarController::class, 'updateEvent'])->name('updateevent');
});
require __DIR__.'/auth.php';

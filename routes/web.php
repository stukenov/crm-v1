<?php

use Illuminate\Support\Facades\Route;
use App\Models\Node;
use App\Http\Controllers\NodeController;




Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    

Route::get('/nodes/create', [NodeController::class, 'create'])->name('nodes.create');
Route::post('/nodes', [NodeController::class, 'store'])->name('nodes.store');

Route::get('/nodes/{id}', function ($id) {
    $node = Node::findOrFail($id);
    return view('node.show', compact('node'));
});    

require __DIR__.'/auth.php';

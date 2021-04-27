<?php

use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cats', function() {
    $cats = Cat::all();

    return view('cats', [ 'cats' => $cats ]);
});

// Show Create Form
Route::get('/cats/create', function() {
    return view('cats-create');
});

// Process form
Route::post('/cats', function(Request $request) {
    ddd(Cat::create([
        'name' => $request->name,
        'breed' => $request->breed,
        'age' => $request->age,
    ]));
});

// Route::get('/cats/{id}', function($id) {
//     $cat = Cat::find($id);

//     return view('cats-show',
//         [ 'cat' => $cat ]
//     );
// });

Route::get('/cats/{id}/edit', function($id) {
    $cat = Cat::find($id);

    return view('cats-edit',
        [ 'cat' => $cat ]
    );
});

Route::put('/cats/{id}', function(Request $request, $id) {
    Cat::find($id)->update([
        'name' => $request->name,
        'breed' => $request->breed,
        'age' => $request->age,
    ]);
    
    return redirect("/cats/$id/edit");
});

Route::delete('/cats/{id}', function($id) {
    Cat::find($id)->delete();
    
    return redirect('/cats');
});

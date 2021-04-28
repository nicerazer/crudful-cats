<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieves EVERY row from a table as models
        $cats = Cat::all();

        // Renders a view to the user, with some data as the second argument
        return view('cats.index', [ 'cats' => $cats ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = Cat::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
        ]);
    
        return redirect('/cats')->with('message', "Created a cat named $cat->name");
    }

    /**
     * Display the specified resource.
     *
     * 📝 Just to note: Our app does not utilize show!
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::findOrFail($id);

        return view('cats.show', [ 'cat' => $cat ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);

        return view('cats.edit', [ 'cat' => $cat ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Cat::findOrFail($id);

        $cat->update([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
        ]);
        
        return redirect("/cats/$id/edit")->with([
            'message' => "Updated cat named $cat->name"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $is_deleted = $cat->delete();
    
        return redirect('/cats')
            ->with(['message' => $is_deleted ?
                "Deleted a cat named $cat->name" : 'Oh no... Cat not deleted!'
            ]);
    }
}

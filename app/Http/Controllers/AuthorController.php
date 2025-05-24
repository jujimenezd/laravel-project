<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#importar modelo book
use App\Models\Author;

class AuthorController extends Controller
{

    public function index()
    { 
        $authors = Author::all();
        return view('authors')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->email = $request->email;
        $author->birth_day = $request->birth_day;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id);
        return view('edit_authors')->with('author',$author);
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
        $author = Author::find($id);
        $author->name = $request->name;
        $author->email = $request->email;
        $author->birth_day = $request->birth_day;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
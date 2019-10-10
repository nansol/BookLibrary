<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Author;


class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
   /*      $authors = Authors::all();
        return view('authors.authors', compact('authors')); */

        $authors = array(
            array('id' => '1','name' => 'Vincent Šikula','dob' => '1936','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Ľudmila Podjavorinská','dob' => '1872','created_at' => NULL,'updated_at' => NULL)
          );
        return view ('authors.index', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'=> 'required',
            'dob'=> 'required'
        ]);

        $author = new Author;
        $author->name = $request->input('name');
        $author->dob = $request->input('dob');
        $author->save();

        return redirect('/authors');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

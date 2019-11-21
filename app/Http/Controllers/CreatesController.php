<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artical;

class CreatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Artical::all();
        // print_r($articals);
        return view('home', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
          'title'=>'required',
          'description'=>'required'
        ]);
        $articles = new Artical;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info', 'Artical Saved Successfully!');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $articles = Artical::find($id);
      return view('show', ['articles' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
      $this->validate($request, [
        'title'=>'required',
        'description'=>'required'
      ]);
      $data = array(
          'title' => $request->input('title'),
          'description' => $request->input('description')
      );
      Artical::where('id', $id)
      ->update($data);
      return redirect('/')->with('info', 'Artical Update Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $articles = Artical::find($id);
      return view('update', ['articles' => $articles]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Artical::where('id', $id)
      ->delete();
      return redirect('/')->with('info', 'Artical Delete Successfully!');

    }
}

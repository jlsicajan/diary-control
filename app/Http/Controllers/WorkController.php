<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WorkController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $works = Work::all();
    return $works;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
//    $work = Work::create(Request::all());
    $work = new Work();
    $work->title = Input::get('title');
    $work->description = 'Description';
    $work->bussiness = 'Lionmane';
    $work->save();

    return $work;
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   * @return Response
   */
//  public function update($id)
//  {
//    $work = Todo::find($id);
//    $work->done = Request::input('done');
//    $work->save();
//
//    return $work;
//  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return Response
   */
  public function destroy($id)
  {
    Work::destroy($id);
  }
}

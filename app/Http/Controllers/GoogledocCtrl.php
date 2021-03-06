<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use imond\Google;

class GoogledocCtrl extends Controller
{
  public function create () {
    return view ('googledocs.create');
  }

  public function postCreate(Request $request) {
    $author = Auth::user()->name;
    $topical = new Google;
    $topical->title = $request->input('title');
    $topical->subject = $request->input('subject');
    $topical->class = $request->input('class');
    $topical->document = $request->input('document');
    $topical->published = true;
    $topical->author = $author;
    $topical->save();

    return redirect('/topical-quiz/view');

  }

  public function show() {
    $topicals = Google::all();

    return view('googledocs.topicals')->with('topicals', $topicals);
  }

  public function showblog($id) {
    $topical = Google::FindOrFail($id);

    return view('googledocs.view', compact('topical'));

  }
}

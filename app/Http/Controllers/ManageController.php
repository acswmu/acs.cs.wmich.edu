<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AgendaTopic;

class ManageController extends Controller
{
  public function index(Request $request)
  {
    $agendaTopics = AgendaTopic::where('resolved', false)
      ->where('user_id', $request->user()->id)->get();

    return view('manage')
      ->with('agendaTopics', $agendaTopics);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AgendaTopic;
use App\User;

class ManageController extends Controller
{
  public function index(Request $request)
  {
    $agendaTopicsQuery = AgendaTopic::query();
    if (! $request->user()->admin) {
      $agendaTopicsQuery = $agendaTopicsQuery->where('user_id', $request->user()->id);
    }
    $agendaTopics = $agendaTopicsQuery->get();

    $users = User::all();

    return view('manage')
      ->with('agendaTopics', $agendaTopics)
      ->with('users', $users);
  }
}

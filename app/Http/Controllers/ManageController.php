<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AgendaTopic;

class ManageController extends Controller
{
  public function index()
  {
    $agendaTopics = AgendaTopic::where('resolved', false)->get();
    return view('manage')
      ->with('agendaTopics', $agendaTopics);
  }

  public function postAgendaTopic(Request $request)
  {
    $this->validate($request, [
      'topic' => 'required|max:255',
    ]);

    AgendaTopic::create([
      'topic' => $request->input('topic'),
      'description' => $request->input('description'),
      'important' => $request->input('important', false),
      'user_id' => $request->user()->id,
    ]);
    return redirect('/manage');
  }

  public function deleteAgendaTopic($id)
  {
    /* Delete an agenda topic, but only if the user either owns the topic or
     * is admin. */
    return '';
  }

  public function updateAgendaTopic($id)
  {
    /* Update an agenda topic, but only if the user either owns the topic or
     * is admin. */
    return '';
  }
}

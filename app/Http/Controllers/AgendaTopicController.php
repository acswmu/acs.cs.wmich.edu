<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AgendaTopic;

use Carbon\Carbon;

class AgendaTopicController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'topic' => 'required|max:255',
      ]);

      /* Only allow confirmed members to submit topics. */
      if ($request->user()->confirmed || $request->user()->admin) {
        AgendaTopic::create([
          'topic' => $request->input('topic'),
          'description' => $request->input('description'),
          'important' => $request->input('important', false),
          'user_id' => $request->user()->id,
        ]);
      }

      return redirect('/manage');
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
      /* Update an agenda topic, but only if the user either owns the topic or
       * is admin. */

      $agendaTopic = AgendaTopic::findOrFail($id);

      if ($request->user()->admin || $agendaTopic->user_id == $request->user()->id) {
        /* If the topic is just now being resolved, set the time it was 
         * resolved. */
        if (! $agendaTopic->resolved && $request->input('resolved', false) == 'on') {
          $agendaTopic->resolved_at = Carbon::now();
        }

        $agendaTopic->topic = $request->input('topic', $agendaTopic->topic);
        $agendaTopic->description = $request->input('description', $agendaTopic->description);
        if ($request->user()->admin) {
          $agendaTopic->important = $request->input('important', false) == 'on';
        }
        $agendaTopic->old_business = $request->input('old_business', false) == 'on';
        $agendaTopic->resolved = $request->input('resolved', false) == 'on';

        $agendaTopic->save();
      }

      return redirect('/manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
      /* Delete an agenda topic, but only if the user either owns the topic or
       * is admin. */
      $agendaTopic = AgendaTopic::findOrFail($id);

      if ($request->user()->admin || $agendaTopic->user_id == $request->user()->id) {
        $agendaTopic->delete($id);
      }

      return redirect('/manage');
    }

    public function edit($id, Request $request)
    {
      $agendaTopic = AgendaTopic::findOrFail($id);
      return view('manage.editAgendaTopic')->with('agendaTopic', $agendaTopic);
    }
}

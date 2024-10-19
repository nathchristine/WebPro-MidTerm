<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ParticipantController extends Controller
{
    public function index()
    {
        $participant = Participant::all();
        $competition = Competition::all();
        return view('participant.index', compact(['participant','competition']));
    }

    public function add()
    {
        $competition = Competition::all();
        return view('participant.add', compact(['competition']));
    }

    public function addComplete(Request $request)
    {
        Participant::create($request->except(['_token','submit']));
        return redirect('IUPParticipantList');
    }

    public function update($id)
    {
        $participant = Participant::find($id);
        $competition = Competition::all();
        return view('participant.update', compact(['participant','competition']));
    }

    public function updateComplete(Request $request, $id)
    {
        Participant::find($id)->update($request->except(['_token','submit']));
        return redirect('IUPParticipantList');
    }

    public function delete($id)
    {
        Participant::find($id)->delete();
        return redirect('IUPParticipantList');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Competition;
use App\Models\Participant;

class ResultController extends Controller
{
    public function index()
    {
        $result = Result::all();
        $competition = Competition::all();
        $participant = Participant::all();
        return view('result.index', compact(['result','competition','participant']));
    }


    public function add()
    {
        $competition = Competition::all();
        $participant = Participant::all();
        $result = Result::all();
        return view('result.add', compact(['competition','participant','result']));
    }

    public function addComplete(Request $request)
    {
        // dd($request->all());
        Result::create($request->except(['_token','submit']));
        return redirect('/IUPResultList')->with('success', 'Your result has been added successfully!');;
    }

    public function delete($id)
    {
        Result::find($id)->delete();
        return redirect('IUPResultList');
    }
}

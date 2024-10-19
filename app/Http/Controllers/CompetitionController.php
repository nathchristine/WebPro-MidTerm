<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competition = Competition::all();
        return view('competition.index', compact(['competition']));
    }

    public function add()
    {
        return view('competition.add');
    }

    public function addComplete(Request $request)
    {
        Competition::create($request->except(['_token','submit']));
        //return redirect()->route('competition.index')->with('success', 'Competition added successfully!');

        return redirect('IUPCompeList');
    }

    public function update($id)
    {
        $competition = Competition::find($id);
        return view('competition.update', compact(['competition']));
    }

    public function updateComplete(Request $request, $id)
    {
        Competition::find($id)->update($request->except(['_token','submit']));
        return redirect('IUPCompeList');
    }

    public function delete($id)
    {
        Competition::find($id)->delete();
        return redirect('IUPCompeList');
    }
}

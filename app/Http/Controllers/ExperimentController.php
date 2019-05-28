<?php

namespace App\Http\Controllers;

use App\Experiment;
use App\ExperimentData;
use App\Participant;
use App\Experiment_values_con;

use Illuminate\Http\Request;

class ExperimentController extends Controller
{

    public function show($link)
    {
        $experiment = Experiment::where('active', 1)->first();
        $participant = Participant::where('link', $link)->first();
        $values = Experiment_values_con::where('experiment_id', $experiment['id'])->get();
        $random = random_int(0, count($values) - 1);

        $success = null;

        if (session()->exists('success')) {
            $success = session('success');
            $random = session('random');
        }

        return view('experiment', [
            'link' => $link,
            'values' => $values,
            'max' => count($values) - 1,
            'random' => $random,
            'participant_name' => $participant['name'],
            'success' => $success,
        ]);

    }

    public function save(Request $request)
    {
        $experiment = Experiment::where('active', 1)->first();
        $participant = Participant::where('link', $request['link'])->first();
        $newData = new ExperimentData;
        $newData->experiment_id = $experiment['id'];
        $newData->participant_id = $participant['id'];
        $newData->value_id = $request['value1'];
        $newData->value_random_id = $request['random'];
        $newData->success = $request['success'];

        $newData->save();

        session()->flash('success', $request['success']);
        session()->flash('random', $request['random']);

        return redirect()->route('showExperiment', ['link' => $request['link']]);
    }
}

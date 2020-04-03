<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnswerController extends Controller
{
    /**
     * @return Factory|View
     */
    public function create()
    {
        $questions = Question::all();

        return view('answers.create', compact('questions'));
    }

    /**
     * @param Request $request
     * @param Question $question
     * @return RedirectResponse
     */
    public function storeOrUpdate(Request $request, Question $question)
    {
        // determine whether the store or the update button was pressed
        if($request->has('store')) {
            $answer = $question->answer()->create([
                'text' => $request->get('text'),
            ]);
        } else if($request->has('update')){
            $answer = $question->answer;

            $answer->text = $request->input('text');
            $answer->update();
        } else {
            alert()->error('Something went wrong');

            return redirect()->back();
        }

        alert()->success('Answer saved!');

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $question = Question::create($request->only('text'));

        alert()->success('Question saved!');

        return redirect()->back();
    }
}

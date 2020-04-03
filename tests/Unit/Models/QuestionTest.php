<?php

namespace Tests\Unit\Models\Questions;

use App\Models\Answer;
use App\Models\Question;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    /**
     * Assert that a question can have an answer.
     *
     * @return void
     *
     * @test
    */
    public function a_question_has_an_answer()
    {
        $question = factory(Question::class)->create();
        $answer = factory(Answer::class)->create(['question_id' => $question->id]);

        $this->assertInstanceOf(Answer::class, $question->answer);
    }

    /**
     * Assert that an answer must belong to a question.
     *
     * @return void
     *
     * @test
     */
    public function an_answer_belongs_to_a_question()
    {
        $question = factory(Question::class)->create();
        $answer = factory(Answer::class)->create(['question_id' => $question->id]);

        $this->assertEquals($answer->question->id, $question->id);
    }
}

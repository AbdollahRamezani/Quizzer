<?php

namespace App\Http\Controllers;

use function Composer\Autoload\includeFile;
use App\Answer;
use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    function question($id)
    {
        $q = Question::where('id', '>=', $id)->first();
        return view('question', with(['q' => $q]));

    }

    function check(Request $request)
    {
        $id = $request['id'];
        $user_answer_id = $request['answer'];
        $true_answer_id = Answer::where('question_id', $id)->where('is_true', 1)->first()->id;

        if ($user_answer_id == $true_answer_id) {
            $x = Session::get('score');
            $x++;
            Session::put('score', $x);
        } else {
            $x = Session::get('score');
            $x--;
            Session::put('score', $x);

        }

        $id++;
        if ($id > Question::orderBy('id', 'desc')->first()->id) {
            return redirect('/final');
        } else {
            return redirect("/question/$id");
        }
    }

    function add(Request $request)
    {
        $q = new Question();
        $q->text = $request ['text_question'];
        $q->save();

        $question_id = $q->id;
        $text_answers = $request['text_answer'];
        $n = 1;
        foreach ($text_answers as $text_answer) {
            $a = new Answer();
            $a->text = $text_answer;
            $a->question_id = $question_id;
            if ($request['is_true'] == $n)
                $a->is_true = 1;
            else
                $a->is_true = 0;
            $a->save();
            $n++;
        }
        $message='سوال و جوابهای شما با موفقیت ثبت گردید';
        return view('/admin',with(['message'=>$message]));
    }
}

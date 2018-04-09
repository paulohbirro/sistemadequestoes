<?php

namespace App\Http\Controllers\API;

use App\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     */
    public function index(Request $request)
    {
        $questions = Questions::all();

        /*
        * Transform
        */
        $questions->transform(function (Questions $questions) {
            return [
                'id' => $questions->id,
                'type' => $questions->type,
                'question' => $questions->question,
                'open_answer' => $questions->open_answer,
                'close_answer' => $questions->close_answer ,
                'feedback' => $questions->feedback,
                'users_id' => $questions->users_id,
            ];
        });

         if($questions->count()==0)
             return with(['message' => 'nada no banco ainda...']);
         else
             return $questions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Questions::create($data);
        return response()->json()->setStatusCode('201');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Questions::find($id);
        return  compact('questions');
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
        $questions = Questions::find($id);
        $questions->question     = $request->get('question');
        $questions->type         = $request->get('type');
        $questions->open_answer  = $request->get('open_answer');
        $questions->close_answer = $request->get('close_answer');
        $questions->feedback     = $request->get('feedback');
        $questions->users_id      = $request->get('users_id');
        $questions->save();

        return response()->json()->setStatusCode('200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Questions::destroy($id);
        return response()->json()->setStatusCode('204');
    }
}

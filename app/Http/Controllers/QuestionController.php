<?php

namespace App\Http\Controllers;

use App\Http\Requests\admin\QuestionStoreRequest;
use App\Questions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Questions $question)
    {


        $question = $question->where('created_at','<=',now())
            ->where('users_id','=',Auth::user()->name)
            ->orderBy('created_at')->paginate(5);

       return view('question.index')->with(compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request)
    {
        $close_answer = $request->only('A','B','C','D');
        $request['close_answer'] = json_encode($close_answer);
        $request['users_id'] = Auth::user()->name;

        $data = $request->all();

        Questions::create($data);
        return redirect()->back()->with(['message' => 'Banner alterado com sucesso!']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Questions::find($id);
        $response = json_decode($question->close_answer);


        return view('question.update')->with(compact('question','response'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question  = Questions::find($id);
        $question->delete();
        return redirect()->back()->with(['message' => 'Removido com sucesso!']);
    }
}

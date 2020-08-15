<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\question;

class questionController extends Controller
{

	public function create(){
    	return view('question.createquestion');
    }
	
    public function store(Request $request)
    {
        $question = new question;
        $question->judul = $request['judul'];
        // dd($question->judul);
        $question->isi = $request['isi'];
        $question->save();

        return redirect('/pertanyaan');
    }

    public function index(){
		//$questions = DB::table('questions')->get(); //get = select dalam query
		//dd($pertanyaan);

        //pake model:
        $questions = question::all();
        // dd($questions);
    	return view('question.index', compact('questions'));
    }

    public function show($id){
    	$questions = question::where('id', $id)->first();
    	//dd($questions);
    	return view('question.show', compact('questions'));
    }

    public function edit($id){
    	$questions = question::where('id', $id)->first();
    	//dd($questions);
    	return view('question.edit', compact('questions'));
    }

    public function editpost(Request $request, $id)
    {
    	$question = question::find($id);
    	// dd($question);
    	$question->judul = $request->input('judul');
    	$question->isi = $request->input('isi');

    	$question->save();

    	return redirect('/pertanyaan');
    }


    public function destroy($id){
        // dd('ini');
    	question::destroy($id);

        return back();
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class QuestionModel extends Model
{
    //
    public function getQuestions(){
		$questions = DB::table('questions_and_answers')
						->get();
		
		return $questions;
	}
	
	public function getQuestion($question_id){
		$question = DB::table('questions_and_answers')
						->join('questions_and_answers_text', 'questions_and_answers.question_id', '=', 'questions_and_answers_text.question_id')
						->where('questions_and_answers.question_id', $question_id)
						->get();
		
		return $question;
	}
	
}

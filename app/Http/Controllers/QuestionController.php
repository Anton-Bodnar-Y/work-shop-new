<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;



use App\PageModel;
use App\CategoryModel;
use App\QuestionModel;

class QuestionController extends Controller
{
    //
    public function getQuestions(){
    	
		
		if(view()->exists('questions')){
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			/*
			* get pages all
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			/*
			* get questions all
			**/
			$questionsModel = new QuestionModel;
			$questions = $questionsModel->getQuestions();
			
			
			/*
			* call view
			**/
			$view = view('questions', [
									'categories' => $categories,  
									'pages' => $pages,
									'questions' => $questions,
								])->withTitle('Вопросы и ответы об аграрном деле - блог компании Хаском-Трейд')
								->withDescription('Вопросы и ответы об аграрном деле - блог компании Хаском-Трейд. Вопросы о посевном материале, вопросы законодательства Украины об аграриях')
								->withKeywords('Статьи агро, аграрные советы, выращивание пшеницы, выращивание гречихи, о посевном материале')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
	
	
	
	public function getQuestion($question_id){
    	
    	//return '565656555655';
		
		if(view()->exists('question')){
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			/*
			* get pages all
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			/*
			* get question
			**/
			$questionsModel = new QuestionModel;
			$question = $questionsModel->getQuestion($question_id);
			
			
			/*
			* call view
			**/
			$view = view('question', [
									'categories' => $categories,  
									'pages' => $pages,
									'question' => $question,
								])->withTitle($question[0]['meta_title'])
								->withDescription($question[0]['meta_desc'])
								->withKeywords($question[0]['meta_keyword'])
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
	
}

<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    // getting all
    public function index(){
        return view('user.topic.index', ['topics' => Topic::paginate(5)]);
    }
    // getting specific with $id
    public function show($id){
        $topic = Topic::findorfail( $id );
        $documents = $topic->documents;
        return view('user.topic.topic', ['topic' => ($topic), 'documents' => ($documents) ]);
    }
}

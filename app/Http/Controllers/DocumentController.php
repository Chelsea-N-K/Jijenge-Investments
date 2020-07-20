<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    // getting all
    public function index($id){
        $document = Document::findorfail( $id );
        return view('user.document.index', [ 'document' => ($document) ]);
    }
}

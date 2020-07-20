<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.document.index');
    }

    public function store(Request $request, $id){
        $request->validate([
            'document' => 'required',
        ]);

        $this->validate(request(), [
            'document.*' => 'required|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800',
        ]);

        $topic = Topic::findorfail( $id );

        $document = $request->file('document');
        $path = $document->store('documents');
        $document = new Document();

        $document->url = $path;

        $document->title = $request->get('document_title');
        $document->description = $request->get('document_description');
        $document->topic_id = $topic->id;
        $document->save();

        return redirect()->back()->with('message', 'Document Created Successfully');
    }

    public function show($id){
        $document = Document::findorfail( $id );
        return view('admin.document.index', ['document' => ($document) ]);
    }

    public function destroy(Document $document){

        $document = Document::findOrFail($document->id);

        //delete user
        $document -> delete();

        return redirect()->back()->with('message', 'Document Deleted Successfully');

    }
}
/*
 * $topic = Topic::findorfail( $id );


        if($request->hasFile('document')){
            $url = $request->file('document');
            $documentname = time().'.'.$url->getClientOriginalExtension();
            $url->move('../public/storage/documents/', $documentname);

            $document = new Document([
                'title'         =>  $request->get('document_title'),
                'description'   =>  $request->get('document_description'),
                'url'           =>  $documentname,
            ]);
            $document->topic_id = $topic->id;
            $document->save();
            return redirect()->back()->with('message', 'Document Created');

        }
        else {
            return redirect()->back()->with('message', 'Document NOT Created');
            // echo $request;
        }
 */

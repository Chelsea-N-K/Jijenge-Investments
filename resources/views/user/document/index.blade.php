@extends('layouts.app')

@section('content')
    <object data="{{ url('storage/'.$document->url) }}" type="application/pdf" frameborder="1" scrolling="auto" height="790rem" width="100%" >
        <iframe src="https://docs.google.com/viewer?url=your_url_to_pdf&embedded=true" frameborder="1" scrolling="auto" height="790rem" width="100%" ></iframe>
    </object>
@endsection

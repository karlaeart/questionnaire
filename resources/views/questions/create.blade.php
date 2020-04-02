@extends('partials.layout')

@section('content')
    <h2>Create a Question</h2>

    <form method="post" enctype="multipart/form-data" role="form" action="{{ action('QuestionController@store') }}">
        @csrf
        <div class="form-group">
            <label for="question">Question</label>
            <textarea class="form-control" id="question" name="text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>
@endsection

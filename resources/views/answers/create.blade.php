@extends('partials.layout')

@section('content')

    <h2>Answers</h2>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <form method="post" enctype="multipart/form-data" role="form" class="answer-form" id="form-{{$question->id}}}" action="{{ action('AnswerController@storeOrUpdate', ['question' => $question]) }}">
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->text }}</td>
                    <td>
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control answer" name="text" rows="3" data-empty="{{ ($question->answer()->exists()) ? "1" : "0" }}">{{ $question->answer['text'] }}</textarea>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="actionsGroup">
                            <button type="submit" name="store" class="btn btn-secondary button-store" @if($question->answer()->exists()) hidden @endif><i class="fas fa-check"></i></button>
                            <button type="submit" name="update" class="btn btn-secondary button-update" @if(!$question->answer()->exists()) hidden @endif><i class="fas fa-pen"></i></button>
                        </div>
                    </td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>

@endsection

@section('js')
    <script src="{{ asset('js/answers/create.js') }}"></script>
@endsection

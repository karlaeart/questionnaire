@extends('partials.layout')

@section('content')
    <h2>Questions List</h2>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <th scope="row">1</th>
                <td>{{ $question->text }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

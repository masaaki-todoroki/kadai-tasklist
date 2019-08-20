@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <h1>id={{ $task -> id }}のメッセージ詳細</h1>
        <table class="table table-bordered">
            <tr>
                <td>id</td>
                <th>{{ $task -> id }}</th>
            </tr>
            <tr>
                <td>ステータス</td>
                <th>{{ $task -> status }}</th>
            </tr>
            <tr>
                <td>タスク</td>
                <th>{{ $task -> content }}</th>
            </tr>
        </table>
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task -> id], ['class' => 'btn btn-light']) !!}
        
        {!! Form::model($task, ['route' => ['tasks.destroy', $task -> id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスク管理ツール</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
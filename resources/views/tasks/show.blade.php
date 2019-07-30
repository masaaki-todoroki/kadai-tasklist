@extends('layouts.app')
@section('content')
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
@endsection
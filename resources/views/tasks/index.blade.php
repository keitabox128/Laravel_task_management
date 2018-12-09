@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    @if (count($tasks) > 0)
        <table class="table table-striped">
                <thred>
                    <tr>
                        <th>タスク名</th>
                        <th>タスク内容</th>
                        <th>作成時間</th>
                        <th></th>
                    </tr>
                </thred>
        <tbody>
        <ul>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
        </ul>
        </tbody>
    </table>
    @endif
    
    {!! link_to_route('tasks.create', 'タスクの投稿', null, ['class' => 'btn btn-default btn-block']) !!}

@endsection
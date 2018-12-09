@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->content }}</td>
                    <td>{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除') !!}
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', 'タスクの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
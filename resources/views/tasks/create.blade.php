@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

 <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
    {!! link_to_route('tasks.index', 'タスクリストに戻る', null, ['class' => 'btn btn-primary']) !!}

@endsection
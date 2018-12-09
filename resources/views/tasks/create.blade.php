@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="row">
     <div class="col-xs-6">
             <h1>メッセージ新規作成ページ</h1>

                    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('title', 'タスクタイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'タスク内容',) !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
    </div>
</div>

{!! link_to_route('tasks.index', 'タスクリストに戻る', null, ['class' => 'btn btn-default btn-block']) !!}

@endsection
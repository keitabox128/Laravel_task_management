@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

<h1>削除しました</h1>

{!! link_to_route('tasks.index', 'タスクリストに戻る', null, ['class' => 'btn btn-primary']) !!}

@endsection
@extends('layout.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    @each('components.item', $data, 'item')
    @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです。'])
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

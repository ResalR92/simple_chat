{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chatroom</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <h2>Chatroom</h2>
        <chat-log :messages="messages"></chat-log>
        <chat-composer @messagesent="addMessage"></chat-composer>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chatroom</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <chat-log :messages="messages"></chat-log>
                    <chat-composer @messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

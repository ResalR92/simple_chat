<!DOCTYPE html>
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
</html>

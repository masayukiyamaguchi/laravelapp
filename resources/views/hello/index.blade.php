<html>
<head>
    @extends("layouts.helloapp")
    @section("title","Index")

    @section("menubar")
        @parent
        インデックスページ
    @endsection

    @section("content")
        <p>ここが本文のこんてんつです。</p>
        <ul>

        <p>Controller value<br>"message"={{$message}}</p>
        <p>ViewComposer value<br>"view_message"={{$view_message}}</p>


        </ul>
    @endsection

    @section("footer")
    copyright 2017 tuyano.
    @endsection
</head>
<body>

</body>

</html>


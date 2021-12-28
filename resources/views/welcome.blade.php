<html lang="vi VN">
    <head>
        <meta charset="utf-8">
        <title>Phân trang trong project Laravel + Vue.js - Allaravel.com</title>

        <!-- Main styles for this application -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
             {{-- <paginate-example></paginate-example> --}}
             <api-users></api-users>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

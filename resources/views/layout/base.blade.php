<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="" />

        <title>{{ config("app.name", "LARAVEL-BLOG") }}</title>

        <!--Bootstrap CSS-->
        <link
            href="https://bootswatch.com/4/cosmo/bootstrap.min.css"
            rel="stylesheet"
        />

        <!--Javascript sources-->
        <!--ALWAYS BEFORE MATERIALISE-->
        <script
            src="https://code.jquery.com/jquery-3.4.0.js"
            integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
    </head>
    <body>
        @include('inc/navbar')

        @yield('landing-jumbotron')
        
        <div class="container">
            @include('inc/messages')        
            @yield('content')
        </div>

        <!--Javascript sources-->
        <!--ALWAYS BEFORE MATERIALISE-->
        <script
            src="https://code.jquery.com/jquery-3.4.0.js"
            integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
            crossorigin="anonymous"
        ></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace("ck-editor-body", {
                // plugins: 'wysiwygarea, toolbar, basicstyles, link' //To allow only these features. Delete the object if you want full features.
            });
        </script>
    </body>
</html>

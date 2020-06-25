<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <script src="{{asset('js/ckeditor.js')}}"></script>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','FirstApp')}}</title>
      
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
             @include('inc.messages')
             @yield('content')
        </div>

        <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
        </script>

        <script>
               CKEDITOR.replace( 'editor1' );
        </script>

    </body>
</html>

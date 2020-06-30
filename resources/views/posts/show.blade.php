@extends('layouts.app')

@section('content')
    <a href="/posts" class = "btn btn-outline-secondary">Go Back</a>
    <p>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
        <p><small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
        
        </P>
       
        
                
            
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
         <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

         {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
             {{Form::hidden('_method','DELETE')}}
             {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

         {!!Form::close()!!}
        @endif 
    @endif
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ef9b5a2f8b02e55"></script>

@endsection
@extends('layout.app')
           
           
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            
         <div class="panel panel-danger">

         <div class="panel-heading">
            <div class="row">
      <div class="col-md-10"><h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3></div>
      <div class="col-md-2 text-right">
      <a href="/posts/{{$post->id}}/edit" role="button" class="btn btn-info">Edit</a>
      </div>
    </div>
         </div>

          

          
   @if(!Auth::guest())
   @if(Auth::user()->id == $post->user_id)


  
  <div class="panel-body">



  {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST']) !!}
  {{Form::hidden('_method' ,'DELETE') }}
   {{Form::submit('Delete',['class'=>"pull-right btn btn-danger"]) }}
{!! Form::close() !!}
@endif
@endif

 {{--  <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:100%,height:50%" >   --}}
  
 <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" > 



  
    <h2> {{$post->subject}}</h2> 
     <p> {!!$post->body!!}</p>
   <span class="label label-danger">created at : {{$post->created_at}}</span>
   <span class="label label-info">  by {{$post->user->name}}</span>

  </div>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="pull-right">
    <a href="/posts" role="button" class="btn btn-default">Back</a>
  </div>
</div>
<hr>
<hr>


           @endsection


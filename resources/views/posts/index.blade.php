@extends('layout.app')
         
 
@section('content')

          <div class="content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
          <h1>Posts</h1><hr><br>
        
        @if(count($posts) >0)

        <div class="row">
          @foreach($posts as $post)
         <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
  <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" onclick="document.getElementById('modal01').style.display='block'" class="w3-hover-opacity" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" > 
  <div id="modal01" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
      <img class="w3-modal-content" src="">
    </div>
    <span class="label label-danger">created at : {{$post->created_at}}</span>
  <span class="label label-info">  by {{$post->user->name}}</span>
             <div class="caption">
                <form action="">

              <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
              <p>{{$post->subject}}</p>
       
              <a role="button" href="/posts/{{$post->id}}" class="btn btn-success">More</a>
               
               
                </form>
             </div>
           </div>
         </div>
         @endforeach
         {{$posts->links()}}
         
       </div>


         {{-- <div class="row container">
            @foreach($posts as $post)
          <div class="col-sm-4">
          
          <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
          </div>
          <div class="panel-body">
            <h2> {{$post->subject}}</h2> 
        
        
         <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" > 
        
        
             <span class="label label-danger">created at : {{$post->created_at}}</span>
             <span class="label label-info">  by {{$post->user->name}}</span>
        <hr>
             <div class="pull-right">
           <a role="button" href="/posts/{{$post->id}}" class="btn btn-success">More</a>
             </div>
        </div>
        </div>
          
          </div>
           
          @endforeach
        
          {{$posts->links()}} 
        </div> --}}
      </div>
    </div>
    @else
        
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Oh  !</strong> <a href="#" class="alert-link">No posts !</a> and try submitting again.
    </div>
    
    @endif
  </div>
</div>
              




@endsection



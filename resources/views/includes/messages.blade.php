@if(count($errors)>0)
  @foreach($errors->all() as $error)
  
  <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
  <strong>Oh  !</strong> {{$error}}  and try submitting again.
</div>
  
  
  
  @endforeach

  @endif

  @if(session('success'))
  
<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
  <strong>Well done!</strong>   {{session('success')}}.
</div>
  


  @endif


   @if(session('error'))
  
  <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
  <strong>Oh  !</strong>   {{session('error')}}  and try submitting again.
</div>


   

  @endif
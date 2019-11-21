@include('includes/header')
@include('includes/nav')
 <div class="col-md-6 offset-md-3">
   <form method="post" action="{{ url('/insert') }}">
     {{ csrf_field() }}

     @if(count($errors)>0)
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
        @endforeach
      @endif
     <div class="form-group">
       <label for="exampleInputEmail1">Title</label>
       <input type="text" class="form-control" name="title" placeholder="Enter title">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Description</label>
       <textarea name="description" class="form-control" placeholder="Enter description" rows="5" cols="56"></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     <a class="btn btn-primary" href="{{url ('/')}}" role="button">Back</a>
   </form>
 </div>
<br><br>
@include('includes/footer')

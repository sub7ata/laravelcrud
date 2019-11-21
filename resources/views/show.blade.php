@include('includes/header')
@include('includes/nav')
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
  <div class="card-header">
    Read Artical
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$articles->title}}</h5>
    <p class="card-text">{{$articles->description}}</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
  </div>
</div>
</div>

    </div>

@include('includes/footer')

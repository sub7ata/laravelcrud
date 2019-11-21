@include('includes/header')
@include('includes/nav')
@if(session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($articles) > 0)

      @foreach($articles->all() as $article)

    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->description}}</td>
      <td>
        <a href='{{ url("/show/{$article->id}") }}' class="btn btn-sm btn-success">View</a>
        <a href='{{ url("/update/{$article->id}") }}' class="btn btn-sm btn-warning">Update</a>
        <a href='{{ url("/delete/{$article->id}") }}' class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  @endif
  </tbody>
</table>

@include('includes/footer')

@extends('layout.booklayout')
@section('title','AuthorLogin')
@section('heading')
    <h2>Author Login</h2>
@endsection

@section('user-view')
<div class="container">
    <form class="row g-3">
        <div class="col-md-12">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <span>Not Registered ? </span><a href="/register">Register Here</a>
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
</div>
@endsection


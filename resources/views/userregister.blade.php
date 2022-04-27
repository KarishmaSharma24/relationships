@extends('layout.booklayout')
@section('heading')
<h4>User Register Here</h4>
@endsection

@section('registerView')
<div class="container">
    <form class="row g-3" action="/user_getdata" method="post">
        @csrf
        <div class="col-md-12">
            <label for="inputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
            <span>Already Registered ? </span><a href="/userlogin">Login</a>
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
      </form>
</div>
@endsection
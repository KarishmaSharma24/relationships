@extends('layout.booklayout')

@section('user-view')

@endsection
@section('heading')
<h4>User Login</h4>
@endsection

@section('userView')
<div class="container">
    <form class="row g-3" action="/userloginform" method="post">
       @csrf
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
            <span>Not Registered ? </span><a href="/userregister">Register Here</a>
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
</div>
@endsection
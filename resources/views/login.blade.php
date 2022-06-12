@extends('master')
@section('content')
<div class="login-page">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
       <form style="width: 23rem" action="/login" method="POST">
        @csrf 
              
       <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
       <div class="form-outline mb-4">
       <input type="email"  name="email"   class="form-control form-control-lg" />
       <label class="form-label" for="form2Example18">Email address</label>
       </div>
              
       <div class="form-outline mb-4">
       <input type="password"name="password" class="form-control form-control-lg" />
       <label class="form-label" for="form2Example28">Password</label>
       </div>
              
      <div class="pt-1 mb-4">
      <button type="submit" class="btn btn-primary">Log In</button>
      </div>
      </div>
      </form>
      </div>
      </div> 
      </div>           
    
@endsection
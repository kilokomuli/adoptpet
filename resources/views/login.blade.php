@extends('layout.master')
@section('tittle,home')
@section('content')


<div class="container justify-content-center">
<div class="form-container">
    <div class="fs-1">
      <h3>LOGIN</h3>
    </div>
   
    <div class="">
            <form class="">
                <div class="mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Email" style="width:300px;">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" style="width:300px;">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <div class="d-grid mt-5">
                 <button type="submit" class="btn btn-primary" style="width:300px;">Login</button>

                </div>
                
            </form>
   <span class="mt-5 d-block"><a href="/signup">Not registered?</a>Create a account!</span>

    </div>

</div>

</div>
@endsection
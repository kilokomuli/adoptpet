@extends('layout.master')
@section('tittle,home')
@section('content')
<div class="container">
    <div class="form-container">

   <h5>Register</h5>
   <div>
   <form class="">
                <div class="mb-3">
                    <input type="text" class="form-control" id="firstname" placeholder="First name" style="width:300px;">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="lastname" placeholder="Last name" style="width:300px;">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="t.number" placeholder="Tel.Number" style="width:300px;">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" style="width:300px;">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" style="width:300px;">
                </div>
               
                <div class="d-grid mt-5">
                 <button type="submit" class="btn btn-primary" style="width:300px;">Sign Up</button>

                </div>
                
    </form>
    <span class="p-5 "><a href="/login">Already Have an account?</a>Login.</span>

    </div>
    </div>

</div>
@endsection
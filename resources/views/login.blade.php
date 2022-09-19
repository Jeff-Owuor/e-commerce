@extends('base')

@section("content")
<div class="container" style="height:500px;padding-top:100px;">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <form action="login"  method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password " class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-secondary">Login</button>
            </form>
        </div>
    </div>

</div>

@endsection

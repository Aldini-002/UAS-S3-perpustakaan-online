@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center" style="margin-top: 10rem">
                <div class="col-md-8">
                    <div class="text-center">
                        <h1>V3421064</h1>
                    </div>
                    <h6 class="profile-username text-center mt-2">LOGIN</h6>

                    <div class="row justify-content-center">
                        <div class="card card-primary card-outline elevation-4">
                            <form action="/mylogin" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            required>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-outline-info btn-block mt-3">Login</button>
                                            </div>
                                            <div class="col-12">
                                                <a href="/myregister"
                                                    class="btn btn-outline-dark btn-block mt-3">Register</a>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@extends('layouts.main.main')

@section('title')
    Nieuws
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/news/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">
                    Het nieuws
                </h1>
                <hr>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-success">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by
                        <a href="#" class="text-success">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-success">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by
                        <a href="#" class="text-success">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-success">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by
                        <a href="#" class="text-success">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link text-success" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4 pt-5">

                <!-- Categories Widget -->
                <div class="card my-5">
                    <h5 class="card-header bg-success text-white">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#" class="text-success">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-success">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-success">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#" class="text-success">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-success">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-success">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header bg-success text-white">Archief</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#" class="text-success">Oktober 2018</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-success">September 2018</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-success">Juli 2018</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-success">Maart 2018</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-success">Februari 2018</a>
                            </li>
                        </ul>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    {{-- End content--}}

@endsection


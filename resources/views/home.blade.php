@extends('layouts.home')

@section('head')
    <!-- Styles -->





@endsection

@include('particles.nav')

@section('content')

<div class="container-fluid">
<div>

    <span class="badge badge-pill badge-secondary">Default</span>
    <span class="badge badge-pill badge-primary">Primary</span>
    <span class="badge badge-pill badge-info">Info</span>
    <span class="badge badge-pill badge-success">Success</span>
    <span class="badge badge-pill badge-warning">Warning</span>
    <span class="badge badge-pill badge-danger">Danger</span>
    <span class="badge badge-pill badge-rose">Rose</span>

</div>
</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card 1</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                                    a little bit longer.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card 1</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                                    a little bit longer.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 2</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 3</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 4</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 5</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 6</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card 7</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                        <i class="fa fa-lg fa-chevron-left"></i>
                    </a>
                    <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->

@endsection

@push('js')

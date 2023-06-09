@extends('layouts.perusahaan')
@section('content')
@include('sweetalert::alert')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <b class="bold">Kandidat</b>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <a href="/perusahaan/list/kandidat">
                                    <div id="kandidat" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-interval="30">
                                                <img src="/gambar/default_user.png" class="d-block w-100" alt="">
                                            </div>
                                            <div class="carousel-item" data-interval="30">
                                                <img src="/gambar/default_user.png" class="d-block w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <b class="bold">Akademi</b>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <a href="/perusahaan/list/akademi">
                                    <div id="akademi" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-interval="2000">
                                                <img src="/gambar/default_user.png" class="d-block w-100" alt="">
                                            </div>
                                            <div class="carousel-item" data-interval="2000">
                                                <img src="/gambar/default_user.png" class="d-block w-100" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/gambar/default_user.png" class="d-block w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Data Kandidat
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
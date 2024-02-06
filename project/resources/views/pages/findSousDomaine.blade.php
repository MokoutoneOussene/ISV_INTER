@extends('layouts.main')

@section('content')

    <section class="category-section" id="oseb">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>{{ $finds->libelle }}</h2>
                <div><a href="#" class="more">Réalisation obtenus</a></div>
                <div><a href="#" class="more">Album photo</a></div>
                <div><a href="#" class="more">Projet en cours</a></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="post-entry-1 border-bottom">
                                {!! $finds->contenu !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="post-entry-1">
                                <a href="" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="{{ asset('assets/img/oseb/100_0242.JPG') }}" alt="" class="img-fluid">
                                </a>
                                <a href=""><img src="{{ asset('assets/img/oseb/100_0249.JPG') }}" alt=""
                                        class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 d-flex">
                    <div class="col-md-4">
                        <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="assets/img/oseb/100_0245.JPG" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="assets/img/oseb/100_0257.JPG" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="assets/img/oseb/100_0304.JPG" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

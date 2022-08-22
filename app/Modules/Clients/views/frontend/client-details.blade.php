@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$model->name) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $model->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.blogs') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $model->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section">
                        <div class="featured-photo">
                            <img src="{{ asset('public/uploads/'.$model->blog_photo) }}">
                        </div>
                        <div class="text">
                            <h2>{{ $model->name }}</h2>
                            <h3>
                                Posted on: {{ \Carbon\Carbon::parse($model->created_at)->format('d M, Y') }}
                            </h3>
                            {!!  $model->blog_content !!}
                        </div>

                        <h2 class="mt_35">Share This</h2>
                        <div class="sharethis-inline-share-buttons"></div>




                    </div>
                </div>
                <div class="col-md-4">
                    @include('layouts.sidebar_blog')
                </div>
            </div>
        </div>
    </div>
@endsection

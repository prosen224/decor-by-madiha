@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_service) }})">
        <div class="bg-page"></div>
        <div class="text">
            <!-- <h1>{{ $service->name }}</h1> -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $service->detail !!}
                </div>
            </div>
            <div class="row service pt_0 pb_0">
                @foreach($clients as $row)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item wow fadeInUp mb_30">
                            <div class="photo">
                                <img src="{{ asset('public/uploads/'.$row->logo) }}" alt="">
                            </div>
                            <div class="text">
                                <h3>{{ $row->name }}</h3>
                                <p>{{ $row->address }}</p>
                                <div class="read-more">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

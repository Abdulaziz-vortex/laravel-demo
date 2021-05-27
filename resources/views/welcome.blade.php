@extends('layout')

@section('content')

    <!-- slider section -->

    <section class="main-slider">
        <div class="container">
            <div class="mani-slider__container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider__slide slide1">
                            <h1>Slider heading here</h1>
                            <p>and some awesome slogan here</p>
                            <button class="btn btn-white">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    
    <form class="container mt-4" action="{{ route('news.create') }}" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" placeholder="insert name" name="name">
        <button class="btn btn-primary">Send</button>
    </form>
@endsection

@section('script')
    <script src=""></script> 
@endsection
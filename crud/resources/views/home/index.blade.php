@extends('templates.main')
@section('content')
    <div class="slider-area">
        <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme">

                <div class="item"><img src="img/slider-image-3.jpg" alt="3"></div>
                <div class="item"><img src="img/slider-image-2.jpg" alt="2"></div>
                <div class="item"><img src="img/slider-image-1.jpg" alt="1"></div>

            </div>
        </div>
        <div class="container slider-content">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    <div class="search-form wow pulse" data-wow-delay="0.8s">
                        <form action="/search" method="POST" role="search" class=" form-inline">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <input type="text" name="title" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <select name="city" id="" class="form-control">
                                    <option>City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="company" class="form-control" placeholder="Company">
                            </div>
                            <input type="submit" class="btn" value="Submit">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area">
        <div class="container">
            <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                <h5>Revolutionise in finding jobs in your area!</h5>
            </div>
            <div class="row how-it-work text-center">
                <div class="col-md-4">
                    <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                        <img src="img/how-work1.png" alt="">
                            <p>Lorem ipsum dolor sit amet, nam in erat doming, his id nonumy deseruisse, nisl inani cu mei.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                        <img src="img/how-work2.png" alt="">
                            <p>Easy to fill and understand questions needed for your resume. It has been never this easier before!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                        <img src="img/how-work3.png" alt="">
                            <p>Business managers like Amet, Dj Stancho Shampiona, Djamaikata and many other professionals in the industry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
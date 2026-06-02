@extends('layouts.app')

@section('content')
<div class="carousel slide" data-bs-ride="false" id="carousel-1">
    <div class="carousel-inner">
        <div class="carousel-item active"><img class="w-100 d-block" src="{{ asset('storage/Environment-Final.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('storage/Nutrition_share.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('storage/everything-you-need-know-about-fitness-1440x810.jpg')}}" alt="Slide Image"></div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
    </ol>
</div>
<h1 style="text-align: center;font-family: 'Abyssinica SIL', serif;font-weight: bold;font-size: 50.52px;">Bro.Health help you health!!!</h1>
<p style="text-align: center;font-size: 24px;">Bro.Health is a company of choice for you to tailor your health program. We provide advice from nutritionists and fitness coaches to help every customer maintain a healthy body and mind.</p>
<section class="position-relative py-5">
    <div class="d-md-none"></div>
    <div class="d-none d-md-block position-absolute top-0 start-0 w-100 h-100"><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAm3XKjLATMU5kI8zNWi2_kgpPhM7OKxlg&amp;q=Malaysia&amp;zoom=11" width="100%" height="100%"></iframe></div>
    <div class="position-relative mx-2 my-5 m-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5 col-xxl-4 offset-md-6 offset-xl-7 offset-xxl-8">
                    <div>
                        <form class="border rounded shadow p-3 p-md-4 p-lg-5" method="post" style="background: var(--bs-body-bg);">
                            <h3 class="text-center mb-3">Contact us</h3>
                            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                            <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea></div>
                            <div class="mb-3"><button class="btn btn-primary" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

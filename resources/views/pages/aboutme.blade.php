@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center;font-size: 89.52px;font-family: 'Abyssinica SIL', serif;">About Us</h1>
    <div class="row">
        <div class="col-md-4"><img class="rounded-circle" width="212" height="218" src="{{ asset('storage/christie.jpg')}}" style="padding-bottom: 0px;"></div>
        <div class="col-md-8 offset-0">
            <h1 style="font-size: 22.52px;font-family: 'Abril Fatface', serif;">Founder (Christie Cham Yong Ern 79094)</h1>
            <p style="font-size: 12px;text-align: justify;font-family: Alef, sans-serif;">Hello, health enthusiasts! I am the founder of Bro. Health, Christie Cham Yong Ern. My goal is to make living a healthy lifestyle approachable and pleasurable for everyone. My basic belief at the beginning of this trip was that taking care of our health should be an adventure of empowerment and self-discovery rather than a chore. Bro. Health is a community of like-minded people aiming toward a shared objective—a healthier, more satisfying life—rather than just a brand. Let's get in touch, exchange life stories, and motivate one another to reach our full potential.</p>

        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-8">
            <h1 style="font-size: 22.52px;font-family: 'Abril Fatface', serif;">System Administrator (Yee siao yi 81537)</h1>
            <p style="font-size: 12px;font-family: Alef, sans-serif;text-align: justify;">Greetings all! My name is Yee Siao Yi, the head of system administrator of Bro. Health. As a system administrator with more than five years of experience, I can provide practical knowledge in creating safe solutions and streamlining procedures to promote organizational performance.</p>
        </div>
        <div class="col-md-4 offset-0"><img class="rounded-circle" width="212" height="218" src="{{ asset('storage/yee.png')}}" style="padding-bottom: 0px;"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"><img class="rounded-circle" width="212" height="218" src="{{ asset('storage/ling.png')}}" style="padding-bottom: 0px;"></div>
        <div class="col-md-8 offset-0">
            <h1 style="font-size: 22.52px;font-family: 'Abril Fatface', serif;">Service System Administrator (Ling Sie Yek 79894)</h1>
            <p style="font-size: 12px;font-family: Alef, sans-serif;text-align: justify;">Hello there! As a system administrator for services at Bro. Health, my name is Ling Sie Yek. I enjoy working in the fast-paced field of technology and am committed to making sure that our system is not only up and running but also performing at its best. I have a strong interest in using technology to improve the provision of services overall.</p>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7">

            <h1 style="font-size: 22.52px;font-family: 'Abril Fatface', serif;">Nutritionist (Chong Jia Wei 79075)</h1>
            <p style="font-size: 12px;font-family: Alef, sans-serif;text-align: justify;">Passionately helping people to improve their health naturally is a total honor and my dream job. I am Chong Jia Wei, the nutritionist from Bro. Health for 2 years. I consider myself extremely fortunate to work with individuals from all backgrounds, supporting them as they pursue improved health. My goal is to educate you and optimize your health with the right nutrition, supplements, and lifestyle plan.</p>

        </div>
        <div class="col-md-4 offset-0"><img class="rounded-circle" width="212" height="218" src="{{ asset('storage/jia.png')}}" style="padding-bottom: 0px;"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"><img class="rounded-circle" width="212" height="218" src="{{ asset('storage/IMG_20210716_205804_266.jpg')}}" style="padding-bottom: 0px;"></div>
        <div class="col-md-7 offset-0">

            <h1 style="font-size: 22.52px;font-family: 'Abril Fatface', serif;">Fitness Trainer (Tay Hui Ling 81362)</h1>
            <p style="font-size: 12px;font-family: Alef, sans-serif;text-align: justify;">Your fitness trainer, Tay Hui Ling has been assisting individuals in reaching their fitness and weight loss objectives for more than 2 years. In Bro. Health, I am a fully certified personal fitness trainer. With a certificate in Exercise Health Fitness from the local university. I am energetic and engaged and will motivate you through every training session. Let's embark on this journey together!</p>

        </div>
    </div>
</div>
<div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <div class="col-md-7 offset-0">


            <a href="{{ route('makeAppointmentPage', ['userId' => Auth::user()->id]) }}" class="btn btn-primary">Make Appointment</a>
        </div>
    </div>
    </div>
</div>

@endsection
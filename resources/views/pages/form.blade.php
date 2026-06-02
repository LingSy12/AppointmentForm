@extends('layouts.app')

@section('content')
<!-- Heading -->
<h1 style="text-align: center;font-family: 'Abril Fatface', serif;font-size: 42.52px;font-weight: bold;margin: 18px;">Bro.Health Appointment Form</h1>

<!-- Form -->
<form class="bootstrap-form-with-validation" style="width: 760px;margin: 28px;padding: 20px;margin-left: 0px;" 
action="{{route('store')}}" method="POST">
@csrf

    <!-- Name -->
    <div class="form-group mb-3">
        <label class="form-label" for="text-input" style="font-weight: bold;">Name</label>
        <input class="form-control" type="text" id="text-input" name="name" placeholder="Please fill in you name" 
        value="{{ Auth::user()->name }}" disabled>
    </div>
    
    <!-- Email -->
    <div class="form-group mb-3">
        <label class="form-label" for="email" style="font-weight: bold;">Email</label>
        <input class="form-control" type="email" id="email-input" name="email" placeholder="Please fill in you email" 
        value="{{ Auth::user()->email }}" disabled>
    </div>
    
    <!-- Slot -->
    <div class="form-group mb-3">
        <label class="form-label" for="bro.health_slot" style="font-weight: bold;">Bro.Health Slot</label>
        <select class="form-select" name="slot" required>
            <option value="" disabled selected>*Please Select*</option>
            <option value="9am-11am">9am-11am</option>
            <option value="2pm-4pm">2pm-4pm</option>
            <option value="5pm-7pm">5pm-7pm</option>
        </select>
    </div>
    
    <!-- Day -->
    <div class="form-group mb-3">
        <label class="form-label" for="day" style="font-weight: bold;">Day</label>
        <input class="form-control" type="date" name="day" required>
    </div>

    <!-- Class -->
    <div class="form-group mb-3">
        <label class="form-label" for="class" style="font-weight: bold;">Class (Can choose more than one)</label>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5" name="class1" value="Fitness class"><label class="form-check-label" for="formCheck-5">Fitness class</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6" name="class2" value="Nutrition class"><label class="form-check-label" for="formCheck-6">Nutrition class</label></div>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7" name="class3" value="Fitness & Nutrition class"><label class="form-check-label" for="formCheck-7">Fitness &amp; Nutrition class</label></div>
    </div>

    <!-- Comment -->
    <div class="form-group mb-3">
        <label class="form-label" for="textarea-input">Please write down you requests</label>
        <textarea class="form-control" id="textarea-input" name="comment"></textarea>
    </div>

    <!-- Buttons -->
    <div class="form-group mb-3" style="text-align: center;">
        <button class="btn btn-primary" type="reset" style="margin: 10px;">Reset</button>
        <button class="btn btn-primary" type="submit" name="insert" style="margin: 10px;">Submit</button>
    </div>

    <span><b>Instruction: You only need to submit this form once only</b></span>
@endsection
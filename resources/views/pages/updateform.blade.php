@extends('layouts.app')

@section('content')
<!-- Heading -->
<h1 class="display-4 fw-bold text-center"><br><strong>Update Feedback Form</strong><br><br></h1>

<!-- Form -->
<form class="bootstrap-form-with-validation" style="padding: 20px;background: linear-gradient(145deg, #d7d7d7, white);"
action="{{route('update', $data->id)}}" method="POST">
@csrf 
@method('PATCH')

    <div class="form-group mb-3">
        <label class="form-label" for="text-input" style="font-weight: bold;">Name</label>
        <input class="form-control" type="text" id="text-input" name="name" placeholder="Please fill in you name" 
        value="{{$data->name}}" disabled>
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="email" style="font-weight: bold;">Email</label>
        <input class="form-control" type="email" id="email-input" name="email" placeholder="Please fill in you email" 
        value="{{$data->email}}" disabled>
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="bro.health_slot" style="font-weight: bold;">Bro.Health Slot</label>
        <select class="form-select" name="slot">
            <option value="9am-11am"  @if ($data->slot == '9am-11am') {{"selected"}} @endif>9am-11am</option>
            <option value="2pm-4pm" @if ($data->slot == '2pm-4pm') {{"selected"}} @endif>2pm-4pm</option>
            <option value="5pm-7pm" @if ($data->slot == '5pm-7pm') {{"selected"}} @endif>5pm-7pm</option>
        </select>
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="day" style="font-weight: bold;">Day</label>
        <input class="form-control" type="date" name="day" value="{{$data->day}}">
    </div>

    <div class="form-group mb-3"><label class="form-label" for="class" style="font-weight: bold;">Class (Can choose more than one)</label>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5" name="class1" value="Fitness class" 
        @if ($data->class1 == 'Fitness class') {{"checked='checked'"}} @endif><label class="form-check-label" for="formCheck-5">Fitness class</label></div>
        
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6" name="class2" value="Nutrition class" 
        @if ($data->class2 == 'Nutrition class') {{"checked='checked'"}} @endif><label class="form-check-label" for="formCheck-6">Nutrition class</label></div>
        
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7" name="class3" value="Fitness & Nutrition class" 
        @if ($data->class3 == 'Fitness & Nutrition class') {{"checked='checked'"}} @endif><label class="form-check-label" for="formCheck-7">Fitness &amp; Nutrition class</label></div>
    </div>
    

    <div class="form-group mb-3">
        <label class="form-label" for="textarea-input">Please write down you requests</label>
        <textarea class="form-control" id="textarea-input" name="comment">{{$data->comments}}</textarea>
    </div>

    <!-- Buttons -->
    <div class="form-group mb-3" style="text-align: center;">
        <button class="btn btn-primary" type="submit" name="update" style="margin: 10px;">Update</button>
    </div>
</form>
@endsection
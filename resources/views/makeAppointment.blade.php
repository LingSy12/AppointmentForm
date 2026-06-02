@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <form action="{{ route('submitAppointment', ['userId' => $user->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="selected_person" class="form-label">Select Person</label>
                    <select class="form-select" id="selected_person" name="selected_person" required>
                        <option value="Fitness Trainer (Tay Hui Ling 81362)">Fitness Trainer (Tay Hui Ling 81362)</option>
                        <option value="Nutritionist (Chong Jia Wei 79075)">Nutritionist (Chong Jia Wei 79075)</option>
                        <option value="System Administrator (Yee siao yi 81537)">System Administrator (Yee siao yi 81537)</option>
                        <option value="Service System Administrator (Ling Sie Yek 79894)">Service System Administrator (Ling Sie Yek 79894)</option>
                        <option value="Founder (Christie Cham Yong Ern 79094)">Founder (Christie Cham Yong Ern 79094)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="appointment_time" class="form-label">Appointment Time</label>
                    <input type="text" class="form-control" id="appointment_time" name="appointment_time" required>
                </div>
                <div class="mb-3">
                    <label for="appointment_date" class="form-label">Appointment Date</label>
                    <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Details</label>
                    <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Appointment</button>
            </form>
        </div>
    </div>
</div>
@endsection

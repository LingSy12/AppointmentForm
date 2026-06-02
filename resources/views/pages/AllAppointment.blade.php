@extends('layouts.app')

@section('content')
<!-- Heading -->
<h1 style="text-align: center;font-family: 'Abril Fatface', serif;font-size: 42.52px;font-weight: bold;margin: 18px;">All Selected Person Appointment Form&nbsp;</h1>

<!-- Flash Messages -->
@if ($message = Session::get('info'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif

<!-- Table -->
<div class="form-group mb-3" style="padding: 0px 50px;">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr style="text-align: center;">
                    <th style="width: 150px;vertical-align: middle;">ID</th>
                    <th style="width: 150px;vertical-align: middle;">User ID</th>
                    <th style="width: 250px;vertical-align: middle;">Selected Person</th>
                    <th style="width: 150px;vertical-align: middle;">Appointment Time</th>
                    <th style="width: 150px;vertical-align: middle;">Appointment Date</th>
                    <th style="width: 350px;vertical-align: middle;">Details</th>
                    <th style="width: 150px;vertical-align: middle;">Operation</th>

                </tr>
            </thead>
            <tbody>
                @foreach($alldata as $data)

                        <tr style='text-align: center;'>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->id}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->user_id}}</td>
                            <td style='width: 250px;vertical-align: middle;'>{{$data->selected_person}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->appointment_time}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->appointment_date}}</td>
                            <td style='width: 350px;vertical-align: middle;'>{{$data->details}}</td>
                            <td>

                            <form action="{{route('deleted',$data->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button class='btn btn-danger' type='submit' name='deleted'>
                            Delete</button>
                            </form>
                            </td>
                        </tr>

                        @endforeach


            </tbody>
        </table>
    </div>
</div>

</div>
{{-- Pagination bar --}}
<div class="d-flex justify-content-center">
{!! $alldata->links() !!}
</div>

@endsection
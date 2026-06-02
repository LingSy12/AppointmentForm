@extends('layouts.app')

@section('content')
<!-- Heading -->
<h1 style="text-align: center;font-family: 'Abril Fatface', serif;font-size: 42.52px;font-weight: bold;margin: 18px;">All Appointment Form&nbsp;</h1>

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
                    <th style="width: 150px;vertical-align: middle;">Name</th>
                    <th style="width: 250px;vertical-align: middle;">Email</th>
                    <th style="width: 150px;vertical-align: middle;">Bro.Health Slot</th>
                    <th style="width: 150px;vertical-align: middle;">Day</th>
                    <th style="width: 150px;vertical-align: middle;"></th>
                    <th style="width: 150px;vertical-align: middle;">Class</th>
                    <th style="width: 150px;vertical-align: middle;"></th>
                    <th style="width: 150px;vertical-align: middle;">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alldata as $data)

                        <tr style='text-align: center;'>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->id}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->name}}</td>
                            <td style='width: 250px;vertical-align: middle;'>{{$data->email}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->slot}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->day}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->class1}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->class2}}</td>
                            <td style='width: 150px;vertical-align: middle;'>{{$data->class3}}</td>
                            <td>

                            <form action="{{route('delete',$data->id)}}" method="POST">
                            
                            <a href="{{route('readform',$data->id)}}" class='btn btn-success'>
                            Read</a>

                            <a href="{{route('updateform',$data->id)}}" class='btn btn-primary'>
                            Update</a>

                            @csrf
                            @method('DELETE')
                            <button class='btn btn-danger' type='submit' name='delete'>
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
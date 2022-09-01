@extends('admin/navSide')
@section('page_title','Appointment')

@section('container')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Appointment</h1>
        </div>

        <div class="container">
            <h4>
                Assign Time Slot
            </h4>
            <hr>
            <form action="{{ route('appointment.add') }}" method="post">
                @csrf
                <label for="exampleInputPassword1" class="form-label">Select Staff</label>

                <select class="form-select" aria-label="Default select example" name="name">
                    <option selected>Select the Staff to Assign Time Slot</option>
                @foreach ($data as $list)

                    <option value="{{ $list->name }}">{{ $list->name }}</option>
              @endforeach
                </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="sdate">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Start time</label>
                    <input type="time" class="form-control" id="exampleInputPassword1" name="stime">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="edate">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">End time</label>
                    <input type="time" class="form-control" id="exampleInputPassword1" name="etime">
                </div>

                <button type="submit" class="btn btn-primary">Assign</button>
            </form>
        </div>
    @endsection

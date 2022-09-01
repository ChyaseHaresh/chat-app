@extends('admin/navSide')
@section('page_title', 'Appointment')

@section('container')
    <div class="row d-flex">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Appointment</h1>
            <strong>
                {{ date('F d, Y') }}
                {{-- {{ date('h:i A') }} --}}
            </strong>
        </div>

        <div class="col-md-6 themed-grid-col">
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
                        <input type="date" class="form-control" id="exampleInputPassword1" name="sdate" min="{{ date('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Start time</label>
                        <input type="time" class="form-control" id="exampleInputPassword1" name="stime" min="{{ date('H:i') }}">
                    </div>
                    <hr class="my-4">
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
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 themed-grid-col">
            <div class="container">
                <h4 >
                    Recently Assigned Slots
                </h4>
                <hr>
                @foreach ($data2 as $list2)
                <a href="{{ url('book/') }}/{{ $list2->id }}" style="text-decoration: none">
                    <div class="d-flex text-muted pt-3">


                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">{{ $list2->staff_name }}</strong>
                                <strong> {{ $list2->start_time }} -
                                    {{ $list2->end_time }}</strong>
                            </div>
                            <span class="d-block">HR Manager</span>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>

        </div>


    @endsection

@extends('admin/navSide')
@section('page_title', 'Dashboard')

@section('container')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Booked Slots</h1>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Time Slot</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)
                <tr></tr>

                    <tr>
                        <th scope="row">{{ $list->id }}</th>
                        <td>{{ $list->fname }} {{ $list->lname }}</td>
                        <td>{{ $list->email }}</td>
                        <td>{{ $list->phone }}</td>
                        <td>{{ $list->staffs }}</td>
                        <td>{{ $list->slot }}</td>
                        <td>
                            @if ($list->status == 1)
                            <a href="{{ url('admin/dashboard/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                                type="button" class="btn btn-success">Active</button></a>
                            @else
                                <a href="{{ url('admin/dashboard/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                                        type="button" class="btn btn-danger">Deactive</button></a>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endsection
    <script></script>

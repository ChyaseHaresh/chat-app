@extends('admin/navSide')
@section('page_title', 'Notices')

@section('container')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Notices</h1>
        </div>
        <div class="container">
            <h4>
                Send Notice
            </h4>
            <hr>
            <form action="{{ route('message.send') }}" method="post">
                <label for="exampleInputPassword1" class="form-label">Select Userr</label>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Select the User to Send Message</option>
                    <option value="1">Ram shrestha</option>
                    <option value="2">Hari Kumar</option>
                    <option value="3"> Shyam verma</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleInputPassword1"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    @endsection

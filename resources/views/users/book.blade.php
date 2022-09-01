<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Book Appointment - <strong> <span> {{ $data[0]->start_time }} -
                        {{ $data[0]->end_time }}</span></strong></h4>
            <form class="needs-validation" action="{{route('booking.add')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" name="fname"
                            required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" name="lname"
                            required="">

                    </div>


                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="you@example.com">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Phone</label>
                        <input type="number" class="form-control" required="" name="phone">

                    </div>
                    <input type="hidden" value="{{ $data[0]->start_time }} -{{ $data[0]->end_time }}" name="slot">
                    <input type="hidden" value="{{ $data[0]->id }}" name="ids">
                    <input type="hidden" value="{{ $data[0]->staff_name }}" name="staffs">
                </div>


                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Confirm</button>
            </form>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Appointment Booking System</h1>


    <div class="container mt-5">
        <h4>Appointment Time Slot Available</h4>

        <div class="my-3 p-3 bg-body rounded shadow-sm mt-5">
            <h6 class="border-bottom pb-2 mb-0">aVAILABLE</h6>
            @foreach ($data as $list)
                <a href="{{ url('book/') }}/{{ $list->id }}" style="text-decoration: none">
                    <div class="d-flex text-muted pt-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%"
                                fill="#007bff" dy=".3em">32x32</text>
                        </svg>

                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">{{ $list->staff_name }}</strong>
                                <span> {{ $list->start_time }} -
                                    {{ $list->end_time }}</span>
                            </div>
                            <span class="d-block">HR Manager</span>
                        </div>
                    </div>
                </a>
            @endforeach

            <small class="d-block text-end mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

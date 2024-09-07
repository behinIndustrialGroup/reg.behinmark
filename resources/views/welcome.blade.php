@extends('layouts.guest')

@section('content')
    <div class="form-box bg-light">
        <h2 class="text-center mb-4">Car Information</h2>
        <form action="javascript:void(0)" id="registeration-form">
            <!-- First Name -->
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
            </div>

            <!-- Car Manufacturer -->
            <div class="mb-3">
                <label for="carMaker" class="form-label">Car Manufacturer</label>
                <input type="text" class="form-control" id="carMaker" placeholder="Enter car manufacturer">
            </div>

            <!-- Car Model -->
            <div class="mb-3">
                <label for="carModel" class="form-label">Car Model</label>
                <input type="text" class="form-control" id="carModel" placeholder="Enter car model">
            </div>

            <!-- Year of Manufacture -->
            <div class="mb-3">
                <label for="year" class="form-label">Year of Manufacture</label>
                <input type="number" class="form-control" id="year" placeholder="Enter year of manufacture">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary" onclick="submit_form()">Submit</button>
            </div>
        </form>
    </div>
    <script>
        function submit_form() {
            var fd = new FormData($('#registeration-form')[0])
            send_ajax_formdata_request(
                "{{ route('test') }}",
                fd,
                function(response) {
                    console.log(response);
                    show_message(response)
                    show_error(response)
                }
            )
        }
    </script>
@endsection

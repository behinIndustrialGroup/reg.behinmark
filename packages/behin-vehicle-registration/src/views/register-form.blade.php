@extends('layouts.guest')

@section('content')
    <!-- Container to center the content with a top margin -->
    <div class="form-container" style="display: block !important; margin: auto; max-width: 400px">

        <!-- Form Box -->
        <div class="form-box bg-light p-4 shadow rounded" style="max-width: 500px;">
            <div class="text-center mb-4">
                <!-- Logo -->
                <img src="{{ url('public/behin/logo.png') }}" alt="behinmarkpoint-logo" class="img-fluid"
                    style="max-width: 150px;">
            </div>
            <!-- Form Title -->
            <h2 class="text-center mb-2">Registration Form</h2>
            <h5 class="text-center mb-4">for Vehicle CNG Conversion</h5>

            <!-- Form -->
            <form class="" action="javascript:void(0)" id="registeration-form">
                <!-- First Name -->
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="firstName" placeholder="Enter your first name">
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="lastName" placeholder="Enter your last name">
                </div>

                <!-- Nigerian Identification Number -->
                <div class="mb-3">
                    <label for="nin" class="form-label">NIN</label>
                    <input type="text" name="nin" class="form-control" id="nin"
                        placeholder="Enter your Nigerian Identification Number">
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phoneNumber" pattern="[0-9]{11}" placeholder="e.g., 08039275959">
                </div>

                <!-- Residence State -->
                <div class="mb-3">
                    <label for="residenceState" class="form-label">Residence State</label>
                    <select class="form-control" name="residence_state" id="state">
                        @include('partial.nig-cities')
                    </select>
                </div>

                <!-- Vehicle Manufacturer -->
                <div class="mb-3">
                    <label for="VehicleMaker" class="form-label">Vehicle Manufacturer</label>
                    <input type="text" name="vehicle_manufacturer" class="form-control" id="VehicleMaker" placeholder="e.g., Toyota">
                </div>

                <!-- Vehicle Model -->
                <div class="mb-3">
                    <label for="VehicleModel" class="form-label">Vehicle Model</label>
                    <input type="text" name="vehicle_model" class="form-control" id="VehicleModel" placeholder="e.g., Corola">
                </div>

                <!-- Year of Manufacture -->
                <div class="mb-3">
                    <label for="year" class="form-label">Year of Manufacture</label>
                    <input type="number" name="vehicle_year" class="form-control" id="year" placeholder="e.g., 2010">
                </div>

                <!-- Year of Manufacture -->
                <div class="mb-3 form-control">
                    <label for="state" class="form-label">Vehicle Registration Number</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="state" class="form-label">State</label>
                            <select class="form-control" id="state" name="vehicle_reg_state">
                                @include('partial.nig-cities')
                            </select>
                        </div>
                        <div class="col-sm-8">
                            <label for="plateNumber" class="form-label">Plate Number</label>
                            <input type="text" name="vehicle_reg_number" class="form-control" id="plateNumber" style="text-transform: uppercase;" placeholder="FKJ-254XA">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" onclick="submit_form()">Submit</button>
                </div>
            </form>
        </div>
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

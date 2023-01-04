<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('front/vendors/mdi/css/materialdesignicons.min.css ') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/ti-icons/css/themify-icons.css ') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('front/vendors/simple-line-icons/css/simple-line-icons.css ') }}" /> --}}

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css ') }}" />
    <!-- endInject -->
    {{-- <link rel="shortcut icon" href="{{ asset('front/images/favicon.png ') }}" /> --}}
    @yield('style')
</head>

<body>


    @yield('content')



    <!-- js -->
    @yield('scripts')

    <script src="{{ asset('front/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('front/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('front/js/off-canvas.js') }}"></script>
    <script src="{{ asset('front/js/hoverable-collapse.js') }}"></script>
    <!-- End custom js for this page-->
    <script>
        $('#logout-btn').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    </script>
    <script>
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id');
            let name = $(this).attr('data-name');
            let email = $(this).attr('data-email');
            let password = $(this).attr('data-password');
            let phone = $(this).attr('data-phone');
            let role_id = $(this).attr('data-role_id');
            let department_id = $(this).attr('data-department_id');

            $("#edit-form input[name|='id']").val(id)
            $("#edit-form input[name|='name']").val(name)
            $("#edit-form input[name|='email']").val(email)
            $("#edit-form input[name|='password']").val(password)
            $("#edit-form input[name|='phone']").val(phone)
            $("#edit-form input[name|='role_id']").val(role_id)
            $("#edit-form input[name|='department_id']").val(department_id)
        })
    </script>

    <script>
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id');
            let name = $(this).attr('data-name');


            $("#edit-form input[name|='id']").val(id)
            $("#edit-form input[name|='name']").val(name)

        })
    </script>
    <script>
        $('#delete-btn').click(function(e) {
            e.preventDefault();
            $('#delete-form').submit()
        })
    </script>

    {{-- <script>
        let risk_status = document.getElementById("risk_status") // defult value
        let mitigation_status = document.getElementById("mitigation_status") // select value
        $('mitigation_status').change(function() {

            Var value = 4 - $(this).find(':selected').val();

            $('risk_status').val(value)

        })
    </script> --}}
</body>

</html>

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
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

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

    <script>
        $('#mitigation_status').change(function(e) {
            e.preventDefault();
            Var value = 4 - $(this).find(':selected').val();
            console.log(value);

            $('#risk_status').val(value)

        })
    </script>
</body>

</html>

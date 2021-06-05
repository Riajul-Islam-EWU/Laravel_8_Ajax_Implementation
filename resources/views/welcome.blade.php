<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <form id="form" action="">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><input id="formsubmit" type="submit" name="submit"></td>
            </tr>
        </table>
        @csrf
    </form>

    <div id="message"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        jQuery('#form').submit(function(e) {
            e.preventDefault();
            jQuery('#formsubmit').attr('disabled', true);
            jQuery('#formsubmit').attr('value', "Please wait");

            jQuery.ajax({
                url: "{{ url('submit') }}",
                data: jQuery('#form').serialize(),
                type: 'post',
                success: function(result) {
                    jQuery('#message').html(result.msg)
                    jQuery('#form')['0'].reset();
                    jQuery('#formsubmit').attr('disabled', false);
                    jQuery('#formsubmit').attr('value', "Submit");
                }
            })
        });

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digit of Sum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">



</head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    p,
    h3 {
        font-family: 'Poppins', sans-serif;
        color: black;
    }

    #icon {
        margin-top: 48px;
        text-align: center;

    }

    body {
        background-image: url("https://cutewallpaper.org/21/white-background-gif/Tag-For-White-Background-File-Hart-S-Inversor-On-White-.gif");
    }

    label.error {
        font-size: 6 display: block;
        color: #f00;
    }
</style>

<body>
    <div class=container>
        <form name="regForm" id="regForm" action="digitsum.php" method="POST">
            @csrf
            <div style="position: relative;">
                <div id='icon'>
                    <p>For example, calling digitSum(12) should return 1 + 2, which is 3.
                        If the number is negative, return the negation of the value.
                        For example, calling digitSum(-12) should return -3.</p>
                </div>

            </div>

            <div class="container-fluid p-5">
                <div class="text-center">
                    <h3><b>Please Enter Your Number!</b></h3>
                </div>
                <div class="text-center">
                    <br>
                    <input type="number" name="number" id="number" placeholder="Enter Your Number!" required>

                </div>
                <br>
                <div class="text-center">
                    <button class="btn btn-primary" onclick="input();" id="generate">Submit</button>
                    <br>
                    <br>
                    <div>
                        <p id="hasil"></p>
                    </div>
                </div>
            </div>
        </form>
        <script>
            $("#regForm").validate({
                rules: {
                    number: {
                        minlength: 1,
                    }
                }
            })
        </script>


</body>

</html>

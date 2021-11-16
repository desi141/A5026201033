<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        #wrapper {
            width: 300px;
            margin: auto;
            padding: 100px 10px;
            margin-top: 50px;
        }

        #round1 {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 400px;
            position: center;
        }

        h2 {
            text-align: center;
            font-size: 30px;
        }

        body {
            background-image: url(https://i.makeagif.com/media/1-12-2021/YsWRDA.gif);
        }

        #klik {
            cursor: pointer;
        }

        label.error {
            font-size: 6 display: block;
            color: #f00;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="round1">
            <h2>Registration Forms</h2>

            <form name="regForm" id="regForm" action="contact.php" method="GET">

                <label for="name">Name:</label><br>
                <input type="text" class="form-control" id="name" title="Must be alphabet only" name="name"
                    placeholder="Enter Name" required><br>
                <label for="address">Address:</label><br>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address"
                    title="Must be valid address" required><br>
                <label for="email">Email Address:</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                    title="Must be valid email address" required><br>
                <label for="psw">Password:</label><br>
                <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter Password"
                    title="Must be length 8 to 16" required><br>
                <label for="telephone">Telephone:</label><br>
                <input type="number" class="form-control" id="telephone" name="telephone"
                    placeholder="Enter Number Telephone" title="Must be numeric" required><br>
                <label for="course">Select Your Course:</label><br>
                <select name="course" class="form-control" id="course" title="Must select an item on the list" required>
                    <option value=""> </option>
                    <option value="btech">BTECH</option>
                    <option value="bba">BBA</option>
                    <option value="bca">BCA</option>
                    <option value="bcom">B.COM</option>
                    <option value="geek">GEEKFORGEEKS</option>
                </select><br>
                <label for="code">Zip Code:</label><br>
                <input type="number" class="form-control" id="code" name="code" placeholder="Enter Zip Code"
                    title="Must be numeric" required><br>
                <div id="klik">
                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
                </div>
        </div>
        </form>
        <script>
            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            });
            $("#regForm").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true
                    },
                    address: {
                        required: true,
                        lettersonly: true
                    },
                    email: {
                        email: true
                    },
                    psw: {
                        minlength: 8,
                        maxlength: 16
                    },
                    telephone: {
                        minlength: 7
                    },
                    course: {
                        course: true
                    },
                    code: {
                        maxlength: 6
                    }
                }
            });
        </script>


</body>

</html>

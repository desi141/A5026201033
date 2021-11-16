<!DOCTYPE html>
<html lang="en">

<head>
    <title>ETS - 5026201033</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            width: 600px;
            margin: auto;

        }

        #round1 {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 600px;
            position: center;
        }

        h2 {
            text-align: center;
            font-size: 26px;
        }

        td {
            vertical-align: top;
            height: 50px;
        }

        .bg {
            padding: 100px 10px;
        }

        table {
            border: none;
            background-color: white;
            margin-top: 0px;
        }

        .button1 {
            background-color: #3c43e1;
            color: white;
            border: 11px;
            width: 155px;
        }

        .button2 {
            background-color: #2aff17;
            color: black;
            border: 11px;
            width: 155px;
        }

        label.error {
            font-size: 10;
            display: block;
            color: #f00;
        }

        #klik {
            cursor: pointer;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <section class="bg">

            <div id="wrapper">
                <div id="round1">
                    <form name="regForm" id="regForm" action="https://www.bukalapak.com/" method="POST">
                        @csrf
                        <table align="center">
                            <p> Sholikah Desi Purwanti <br>
                                Desi <br>
                                5026201033 </p><br>
                            <h2>Form Pendaftaran Kuota Internet</h2>

                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td>:</td>
                                <td><input type="text" id="name" name="name" required></td>
                            </tr><br>
                            <tr>
                                <td>NRP Mahasiswa</td>
                                <td>:</td>
                                <td><input type="number" id="nrp" name="nrp" required></td>
                            </tr><br>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td><select name="jurusan" required>
                                        <option value=""> </option>
                                        <option value="sisfor">Sistem Informasi</option>
                                        <option value="elektro">Elektro</option>
                                        <option value="infor">Informatika</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor Handphone</td>
                                <td>:</td>
                                <td><input type="number" id="nomor" name="nomor" required></td>
                            </tr>
                </div>
            </div>
            </table>
            <br>
            <div id="klik">
                <div class="col">
                    <input type="submit" class="btn button1" value="Kirim">
                    <input type="reset" class="btn button2" value="Reset">
                </div>
            </div>
            </form>
        </section>
        <script>
            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");

            $("#regForm").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true,
                        minlength: 10
                    },
                    nrp: {
                        required: true,
                        number: true,
                        minlength: 10
                    },
                    jurusan: {
                        required: true,
                    },
                    nomor: {
                        required: true,
                        number: true,
                        minlength: 10
                    }
                },
                messages: {
                    name: {
                        required: "Harap masukkan nama Anda",
                        lettersonly: "Hanya alphabet",
                        minlength: "Harap masukkan minimal 1 karakter"
                    },
                    nrp: {
                        required: "Harap masukkan NRP Anda",
                        number: "Harap masukkan angka saja",
                        minlength: "Harap masukkan minimal 10 digit"
                    },
                    jurusan: {
                        required: "Harap memilih jurusan",
                    },
                    nomor: {
                        required: "Harap masukkan nomor handphone",
                        number: "Harap masukkan angka saja",
                        minlength: "Harap masukkan minimal 10 digit"
                    }
                },

            })
        </script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>

    <title>About Capricorn | jQuery Slide</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script type="text/javascript">
    </script>

    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("fast");
            });
        });
        $(document).ready(function () {
            $("button").click(function () {
                alert("Hello! " + $("#test").val());
            });
        });
    </script>
    <style>
        h1 {
            margin-top: 50px;
            font-family: "Sofia", sans-serif;
            font-size: 40px;
            text-shadow: 3px 3px 3px #ababab;
            text-align: center;
            color: white;
            letter-spacing: 2px;
        }

        body {
            background-image: url(https://i.pinimg.com/originals/73/62/75/7362759c02faa8997f142569eeffd872.gif);
        }

        img,
        #flip {
            width: 380px;
            text-align: center;
            margin-top: 10px;
        }

        #flip {
            width: 390px;
            padding: 20px;
            margin-bottom: 10px;
            background: #e5e3e4;
            color: #0085c8;
            border: 2px solid #0085c8;
            border-radius: 10px 10px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 2px;
        }

        #panel,
        #flip {
            padding: 10px;
            text-align: center;

        }

        #panel {
            padding: 5px;
            color: white;
            display: none;

        }

        #wrapper {
            width: 400px;
            margin: auto;
            padding: 10px;
            margin-top: 50px;
        }

        p {
            font-family: 'Poppins', sans-serif;
            padding: 0px;
            color: white;
            margin-top: 9px;
            margin-left: 20px;
            text-indent: 30px;
        }

        h3 {
            font-family: 'Poppins', sans-serif;
            padding: 0px;
            color: white;
            margin-top: 9px;
            margin-left: 20px;
            font-size: 15px;
            text-align: center;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            color: white;
            text-align: center;
            font-size: 20px;
        }

        button {
            width: 100px;
            text-align: center;
            padding: 1px;
            margin-bottom: 0px;
            background: blue;
            color: white;
            border: 2px solid #0085c8;
            border-radius: 7px 7px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 1px;
            position: center;
            left: 50%;
            transform: translate(625%, 50%);
        }

        #test {
            width: 200px;
            padding: 3px;
            margin-bottom: 10px;
            color: black;
            border: 2px solid #0085c8;
            border-radius: 1px 1px;
            font-weight: bold;
            text-align: center;
        }

        #p {
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
            color: white;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <body>
        <h1>About Capricorn</h1>
        <div id="wrapper">
            <div id="flip">Click to show image!</div>

            <div id="panel">
                <img src="https://astromix.net/blog/wp-content/themes/yootheme/cache/capricorn-27290bdc.jpeg">
            </div>
        </div>

        <p>If you were born between December 22 and January 19, you're a Capricorn. And just like with every other sign
            in the zodiac, Capricorn personality traits have their own special flavor.</p>
        <p>Ruled by the planet Saturn, which represents the limits of space and time, Capricorns are born with a keen
            awareness of this Earthly limitation and are thus determined to make things happen during their lifetime,"
            says astrologer Elisabeth Grace. "They're known for their serious focus, especially in youth.</p>
        <h2>
            |
        </h2>
        <h2>
            <i>"Capricorns are determined to make things happen during their lifetime. They're known for their serious
                focus, especially in youth."</i> -astrologer Elisabeth Grace
        </h2>
        <h2>
            |
        </h2>
        <hr>
        <h3>So, whats your zodiac? Please write here :)</h3>
        <div id="p">
            <input type="text" id="test" Hello!="Mickey Mouse" placeholder="Enter Your Zodiac!">
        </div>

        <button>Submit</button>

    </body>

</body>

</html>

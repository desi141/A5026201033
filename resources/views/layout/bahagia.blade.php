<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        </script>

</head>

<style>
    .atas {
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #744e4e;
    }
    .row .content {
        height : auto;
    }

    h3 {
        text-align: centerr;
    }

    .sidenav {
      margin-top: 100px;
      font-size: 15px;
    }
	/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .row.content {height: auto;}
    }
    footer {
        position: fixed;
        bottom: 20px;
        width: 100%;
        color: white;
    }
    body {
        background-image: url(https://wallpapers.com/images/high/simple-black-aesthetic-circular-lines-kzlncba894vit67b.jpg);
        font-family: "Trirong", serif;
    }
  </style>

<body>
    <!-- Header -->
   <header>
    <div class="atas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <img src="https://zedemy.com/wp-content/uploads/avatars/1626/6131e1c3e2c74-bpfull.jpg" class="center-block" width="85">
                </div>
                <div class="align-center">
                        <br>
                        <h5> 5026201033 </h5>
                        <h5> <b>Sholikah Desi Purwanti</b> </h5>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-inverse visible-xs">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>

        <ul class="nav navbar-nav">
            <li> <a href="/pegawai"> Pegawai </a></li>
            <li><a href="/absen"> Absen </a></li>
            <li> <a href="#"> Praktikum </a> </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row content">
            <!-- Side Navbar -->
            <div class="col-sm-2 sidenav hidden-xs ">
                <br>
                @yield('side-navbar')
                <br>
            </div>
                <br>

            <!-- Konten Utama -->
            <div class="col-sm-10">
                <div class="well"> <h3 style="text-align:center"> @yield('judulbagian') </h3>
                    <br>
                    @yield('konten')
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <hr style="border:solid 0.5px #744e4e">
            <h5 class="text-center"> Hak Cipta Oleh:
            5026201033 | Sholikah Desi Purwanti</h5>
        </div>
    </footer>


    @show

</body>
</html>

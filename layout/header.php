<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </link>
    <!-- CSSbootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
    <!----======== CSS ======== -->
    <link type="text/css" rel="stylesheet" href="css/headers.css">
    <link type="text/css" rel="stylesheet" href="css/sales.css">
    <link type="text/css" rel="stylesheet" href="css/purchase.css">
    <link type="text/css" rel="stylesheet" href="css/catalogue.css">
    <link type="text/css" rel="stylesheet" href="css/detail_catalogue.css">
    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <!-- sidbar  -->
    <ul id="mySide" class="sidenav collapsible">
        <li>
            <div class="logo mt-2 mb-2">
                <img src="images/logo-white.png" alt="" srcset="">
            </div>
        </li>
        <li>
            <div class="divider"></div>
        </li>

        <li class="col s12 side-item" href=""><a href="domestic_sale.php">Domestic Sales</a> </li>
        <li class="col s12 side-item" href=""><a href="catalogue.php">Catalogue</a></li>
        <li class="col s12 side-item" href=""><a href="domestic_sale.php">Delivery</a></li>

        <li>
            <div class="divider"></div>
        </li>


        <li>
            <div class="collapsible-header side-item" style="margin-left:15px;">Product</div>
            <ul class="collapsible-body side-sub-item">
                <li class="col s12 side-sub-menu"><a href=""> Material</a></li>
                <li class="col s12 side-sub-menu"><a href="Color ">Color</a></li>
                <li class="col s12 side-sub-menu"><a href="Seater">Seater</a></li>
                <li class="col s12 side-sub-menu"><a href="Vendor">Vendor</a></li>
            </ul>
        </li>
        <li>
            <div class="collapsible-header side-item" style="margin-left:15px;">Warehouse</div>
            <ul class="collapsible-body side-sub-item">
                <li class="col s12 side-sub-menu"><a href="">Seater</a></li>
                <li class="col s12 side-sub-menu"><a href="Vendor"></a></li>

            </ul>
        </li>
        <li>
            <div class="collapsible-header side-item" style="margin-left:15px;">Account</div>

            <ul class="collapsible-body side-sub-item">

                <li class="col s12 side-sub-menu"><a href="">Role</a></li>
                <li class="col s12 side-sub-menu"><a href="">Team</a></li>
            </ul>
        </li>
        <li>
            <div class="collapsible-header side-item" style="margin-left:15px;">Order</div>
            <ul class="collapsible-body side-sub-item">
                <li class="col s12 side-sub-menu"><a href="">Channel</a></li>
                <li class="col s12 side-sub-menu"><a href="">Payment</a></li>
                <li class="col s12 side-sub-menu"><a href="">status</a></li>
            </ul>
        </li>
    </ul>



    <!-- navbar content here  -->

    <head>
        <div class="row top-bar" style="background-color: white;">
            <div class="col s11 burger mt-1">
                <a href="#" data-target="mySide" class="sidenav-trigger"><i class="material-icons small">menu</i></a>
            </div>
            <div class="col s1 mt-1">
                <div class="account">

                    <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="">
                        <span>
                            Achmad Saepudin
                        </span>
                        <i href="">
                            <img src="images/yuna.jpg" alt=""></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </link>

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
    <!-- <div id="wrapper">
        <ul class="mySide" class="sidenav-fixed collapsible">
            <li>
                <div class="logo mt-2 mb-2">
                    <img src="images/logo-white.png" alt="" srcset="">
                </div>
                <i class="material-icons closed">close</i>
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
        </ul> -->
    <!-- navbar content here  -->

    <div class="wrapper">

        <div class="sidebar">

            <div class="row side-content">

                <div class="col s12 hidebar right-align">

                    <i class="material-icons">close</i>

                </div>

                <div class="col s12 logo">
                    <a href=""><img src="images/logo-white.png"></a>
                </div>

                <hr class="col s12">

                <a class="col s12 side-item" href="domestic_sale.php">Domestic sales</a>
                <a class="col s12 side-item" href="catalogue.php">Catalogue</a>
                <a class="col s12 side-item" href="">Delivery</a>

                <hr class="col s12">

                <div class="sub-item">Settings</div>

                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header side-item">Product</div>
                        <div class="collapsible-body side-sub-item">
                            <a class="col s12 side-sub-menu" href="">Material</a>
                            <a class="col s12 side-sub-menu" href="">Color</a>
                            <a class="col s12 side-sub-menu" href="">Seater</a>
                            <a class="col s12 side-sub-menu" href="">Vendor</a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header side-item">Warehouse</div>

                        <div class="collapsible-body side-sub-item">

                            <a class="col s12 side-sub-menu" href="">Seater</a>
                            <a class="col s12 side-sub-menu" href="">Vendor</a>

                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header side-item">Account</div>

                        <div class="collapsible-body side-sub-item">

                            <a class="col s12 side-sub-menu" href="">Role</a>
                            <a class="col s12 side-sub-menu" href="">Team</a>

                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header side-item">Order</div>
                        <div class="collapsible-body side-sub-item">
                            <a class="col s12 side-sub-menu" href="">Channel</a>
                            <a class="col s12 side-sub-menu" href="">Payment</a>
                            <a class="col s12 side-sub-menu" href="">Status</a>
                        </div>
                    </li>
                </ul>

            </div>

        </div>

        <div class="content">

            <div class="topbar">

                <div class="col s12 showbar left">

                    <i class="material-icons">dehaze</i>

                </div>
                <div class="right">
                    <a class='dropdown-trigger btn' href='#' data-target='account-topbar'>Hello Bobby!<i class="material-icons right">arrow_drop_down</i></a>

                    <!-- Dropdown Structure -->
                    <ul id='account-topbar' class='dropdown-content'>
                        <li><a href="#!">Setting</a></li>
                        <li><a href="#!">Logout</a></li>
                    </ul>
                </div>
                <!-- next page  ke include di file yang di panggil  -->
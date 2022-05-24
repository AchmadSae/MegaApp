
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'></link>
    <!-- CSSbootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

     <!----======== CSS ======== -->
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/sales.css">
    <!--<title>Dashboard Sidebar Menu</title>-->
</head>
<body>
    <!-- top-bar -->
    <div class="row">
        <div class="col s12 top-bar">
            <div class="title">
                <h1>Dashboard</h1>
            </div>
            
            <div class="account">
                 <i href="">
                My Name <img src="images/yuna.jpg" alt=""></i>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </div>
            
        </div>

    </div>
        <!-- top-bar -->

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo-white.png" alt="" srcset="" style="width: 100px;">
                </span>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <hr class="batas">
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="report.php">
                            <i class="material-icons">assignment</i>
                            <span class="text nav-text">Report</span>
                        </a>
                    </li>


                    <li class="nav-link nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='material-icons'>store</i>
                            <span class="text nav-text">Sales</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="domestic_sale.php">Domestic Sale</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-link nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='material-icons' >shopping_cart</i>
                            <span class="text nav-text">Purcase</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='material-icons' >chrome_reader_mode</i>
                            <span class="text nav-text">Cataloge</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='material-icons' >local_shipping</i>
                            <span class="text nav-text">Delivery</span>
                        </a>
                    </li>

                </ul>
            </div>
            <hr class="batas">
            <div class="bottom-content">
                <li class="product nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='material-icons' >event_seat</i>
                        <span class="text nav-text">Product</span>
                    </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                </li>

                <li class="nav-item channel">
                    <a href="">
                        <i class='material-icons' >extensions</i>
                        <span class="text nav-text">Channel</span>
                    </a>

                </li>
                <li class="warehouse nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='material-icons' >account_balance</i>
                        <span class="text nav-text">Warehouse</span>
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                </li>
                <li class="account nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='material-icons' >account_circle</i>
                        <span class="text nav-text">Account</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                </li>
            </div>
        </div>
    </nav>

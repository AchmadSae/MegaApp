
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
     <link rel="stylesheet" href="css/purchase.css">
    <!--<title>Dashboard Sidebar Menu</title>-->
</head>
<body>
        <!-- sidbar  -->
    
     <ul id="mySide" class="sidenav">
        <li>
            <div class="user-view">
                 <a href="#user"><img class="" src="images/logo-white.png" ></a>
            </div>
        </li>
        <!-- home  -->
        <li><div class="divider"></div></li>
            <li class="itemSide"><i class="material-icons">home <span>Dashboard</span></i></li>
        <!-- report  -->
        <li class="itemSide">
             <i class="material-icons">assignment <span>Report</span></i> 
        </li>
                <li><div class="divider"></div></li>
                <!-- sale  -->
        <li class="nav-item dropdown dropNav mt-4">
            <div class="logo nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons small" href="#">store</i>
                    <span>
                        Sale
                    </span>
                <i class="material-icons small" href="#" style="margin-left: 55px;">expand_more</i>
            </div>
            
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="domestic_sale.php">Domestic Sale</a></li>
                            <li><a class="dropdown-item" href="#">Export</a></li>
                            <li><a class="dropdown-item" href="#">Reject</a></li>
                            <li><a class="dropdown-item" href="#">Broken</a></li>
                            <li><a class="dropdown-item" href="#">Lost</a></li>
                            <li><a class="dropdown-item" href="#">Return</a></li>
                            <li><a class="dropdown-item" href="#">Assets</a></li>
                </ul>
        </li>
        <!-- purchase  -->
        <li class="nav-item dropdown dropNav ">
            <div class="logo nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons small" href="#">shopping_cart</i>
                    <span>
                        Purchase
                    </span>
                <i class="material-icons small" href="#" style="margin-left: 17px;">expand_more</i>
            </div>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="purchase.php">Domestic</a></li>
                            <li><a class="dropdown-item" href="#">Import</a></li>
                            <li><a class="dropdown-item" href="#">Assets</a></li>
                            <li><a class="dropdown-item" href="#">Return</a></li>
                </ul>
        </li>
         <!-- catalogue  -->
        <li class="itemSide">
             <i class="material-icons">chrome_reader_mode <span>Catalogue</span></i> 
        </li>
        <!-- inventory  -->
        <li class="itemSide">
             <i class="material-icons">account_balance <span>Inventory</span></i> 
        </li>
        <!-- Delivery  -->
        <li class="itemSide">
             <i class="material-icons">local_shipping <span>Delivery</span></i> 
        </li>
             <li><div class="divider"></div></li>  
        <!-- product    -->
         <li class="nav-item dropdown dropNav mt-4">
            <div class="logo nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons small" href="#">event_seat</i>
                    <span>
                        Product
                    </span>
                <i class="material-icons small" href="#" style="margin-left: 25px;">expand_more</i>
            </div>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Category</a></li>
                            <li><a class="dropdown-item" href="#">Material</a></li>
                            <li><a class="dropdown-item" href="#">Color</a></li>
                            <li><a class="dropdown-item" href="#">Seater</a></li>
                            <li><a class="dropdown-item" href="#">Vendor</a></li>
                </ul>
        </li> 
        <!-- Channel  -->
        <li class="itemSideC">
             <i class="material-icons">extensions <span>Channel</span></i> 
        </li>
         <!-- warehouse    -->
         <li class="nav-item dropdown dropNav">
            <div class="logo nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons small" href="#">business</i>
                    <span>
                        Warehouse
                    </span>
                <i class="material-icons small" href="#">expand_more</i>
            </div>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Driver</a></li>
                            <li><a class="dropdown-item" href="#">Location</a></li>
                </ul>
        </li>  
        <!-- account    -->
         <li class="nav-item dropdown dropNav mb-2">
            <div class="logo nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons small" href="#">account_circle</i>
                    <span>
                        Account
                    </span>
                <i class="material-icons small" href="#"style="margin-left: 20px;">expand_more</i>
            </div>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">User</a></li>
                            <li><a class="dropdown-item" href="#">Role</a></li>
                            <li><a class="dropdown-item" href="#">team</a></li>
                </ul>
        </li>    
    </ul>



            <!-- navbar content here  --> 
    <head>
        <div class="row mt-4 top-bar" style="background-color: white;">
            <div class="col s11 burger">
                     <a href="#" data-target="mySide" class="sidenav-trigger"><i class="material-icons small">menu</i></a> 
            </div>
            <div class="col s1">            
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

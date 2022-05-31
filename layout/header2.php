
<head>

<!--external js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--internal js-->
<script src="js/main.js"></script>

<!--internal css-->
<link type="text/css" rel="stylesheet" href="css/header2.css">    

<!--external css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

<div class="wrapper">

    <div class="sidebar">
        
        <div class="row side-content">

            <div class="col s12 hidebar right-align">

                <i class="material-icons">dehaze</i>

            </div>

            <div class="col s12 logo">
               <a href="../3.0/"><img src="img/logo-white.png"></a>
            </div>

            <hr class="col s12">

            <a class="col s12 side-item" href="">Domestic sales</a>
            <a class="col s12 side-item"  href="">Catalogue</a>
            <a class="col s12 side-item"  href="">Delivery</a>
            
            <hr class="col s12">
            
            <div class="sub-item">Settings</div>

            <ul class="collapsible">
                <li>
                    <div class="collapsible-header side-item">Product</div>
                    <div class="collapsible-body side-sub-item">
                        <a class="col s12 side-sub-menu" href="">Material</a>
                        <a class="col s12 side-sub-menu"  href="">Color</a>
                        <a class="col s12 side-sub-menu"  href="">Seater</a>
                        <a class="col s12 side-sub-menu"  href="">Vendor</a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header side-item">Warehouse</div>

                    <div class="collapsible-body side-sub-item">

                        <a class="col s12 side-sub-menu"  href="">Seater</a>
                        <a class="col s12 side-sub-menu"  href="">Vendor</a>

                    </div>
                </li>
                <li>
                  <div class="collapsible-header side-item">Account</div>
                    
                    <div class="collapsible-body side-sub-item">

                        <a class="col s12 side-sub-menu"  href="">Role</a>
                        <a class="col s12 side-sub-menu"  href="">Team</a>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header side-item">Order</div>
                    <div class="collapsible-body side-sub-item">
                        <a class="col s12 side-sub-menu" href="">Channel</a>
                        <a class="col s12 side-sub-menu"  href="">Payment</a>
                        <a class="col s12 side-sub-menu"  href="">Status</a>
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

        </div>

        
    </div>

</div>

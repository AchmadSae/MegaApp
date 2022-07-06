<?php
include "temp/header.php";

?>

<section id="catalogue">
    <!-- title  -->
    <div class="step">
        <span><a href="./">Home</a> / <span class="second-text">Catalogue</span></span>
    </div>
    <div class="add-product">
        <h4 class="title">Catalogue</h4>
        <a class="waves-effect waves-light main-btn right"><i class="material-icons left">add</i>Add New Product</a>
    </div>
    <div class="search-catalogue row">

        <div class="drop col s4">
            <div class="input-field">
                <i class="material-icons prefix">youtube_searched_for</i>
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">search product</label>
            </div>
            <!-- Dropdown Trigger -->
        </div>
        <div class="sort col s4">
            <label >Sort By :</label>
            <input class='dropdown-trigger' href='#' data-target='dropdown1' type="text" id="autocomplete-input" class="autocomplete"></a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Date</a></li>
                <li><a href="#!">Delivery</a></li>
                <li><a href="#!">Invoice</a></li>
            </ul>
        </div>
        <!-- radio btn filter data  -->
        <div class="filter col s4">
            <p class="mt-2">Order</p>
            <form action="#">
                <p>
                    <label>
                        <input class="with-gap" name="group1" type="radio" />
                        <span>Asscending ( A - Z )</span>
                    </label>
                    <label>
                        <input class="with-gap" name="group1" type="radio" />
                        <span>Descending ( Z - A )</span>
                    </label>
                </p>
            </form>
        </div>
    </div>

    <div class="catalogue-content">
        <!-- card catalogue  -->
        <div class="cards">
            <div class="row">
                <div class="cards-row col s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cards-row col s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="images/bono.jpg">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <p class="color-type">
                                ACBDSJKUU
                            </p>
                            <div class="name">
                                <span>Bono</span>
                                <p>sofa 2 dudukan</p>
                                <div class="spec">
                                    <p class="bahan">fabric</p>
                                    <p class="warna">grey</p>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price">
                                    <p class="price">Rp.2,600,000</p>
                                    <p class="price-coret">Rp.2,760,000</p>
                                    <p class="price-sale">Rp.2,560,000</p>
                                </div>
                                <div class="stock">
                                    <p class="pStock">stock <br> 100</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <a class="action" href="detail_catalogue.php">DETAIL</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- search form  -->
        </div>
    </div>

    <!-- operation catalogue  -->
</section>
</div>
<!-- div penutup content include topbar  -->
</div>
<!-- div penutup wraper include sidebar  -->



<?php
include "temp/footer.php";
?>
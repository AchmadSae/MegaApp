<?php
include "layout/header.php"
?>

<!-- section untuk edit data di catalogue  -->
<section id="edit_catalogue">
    <h4>Edit Product</h4>
    <div class="row">
        <div class="col s4 names">
            <div class="name">
                <ul class="kanan">
                    <li>Name</li>
                    <li>Detail</li>
                    <li>Number</li>
                    <li>Category</li>
                    <li>Seater</li>
                    <li>Slot</li>
                    <li>Tier</li>
                    <li>Supply price</li>
                </ul>
                <ul class="kiri">
                    <li> <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">

                    </li>
                    <li>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                    </li>
                </ul>
            </div>
            <div class="material">
                <div class="drop">
                    <ul class="collapsible">
                        <li>
                            <div class="isi">
                                <input class="collapsible-header side-item" style="margin-left:15px;"><i class="material-icons right">arrow_drop_down</i></input>

                            </div>
                            <ul class="collapsible-body side-sub-item">
                                <li class="col s12 side-sub-menu"><a href=""> Material</a></li>
                                <li class="col s12 side-sub-menu"><a href="Color ">Color</a></li>
                                <li class="col s12 side-sub-menu"><a href="Seater">Seater</a></li>
                                <li class="col s12 side-sub-menu"><a href="Vendor">Vendor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="notice">
                    <a href="" class="material-icons">priority_high</a>
                    <a href="" class="material-icons">priority_high</a>
                    <a href="" class="material-icons">priority_high</a>
                </div>
            </div>
        </div>
        <!-- form material fabric  -->
        <div class="col s4 fabric">

        </div>
        <!-- form material PU fabri  -->
        <div class="col s4 PUfab">

        </div>
    </div>

</section>

<!-- akhir section untuk edit  -->

<?php
include "layout/footer.php"
?>
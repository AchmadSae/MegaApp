<?php
include "layout/header.php"
?>

<!-- section untuk edit data di catalogue  -->
<section id="edit_catalogue">
    <div class="title">
        <span>Edit Product</span>
    </div>
    <div class="row edits">
        <div class="col s4 names">
            <div class="list">
                <div class="input-field">
                    <label for="autocomplete-input">Name</label>
                    <input type="text" id="autocomplete-input" class="autocomplete">
                </div>


                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Detail</label>
                </div>

                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Number</label>
                </div>

                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Category</label>
                </div>

                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Seater</label>
                </div>

                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Slot</label>
                </div>
                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Tier</label>
                </div>
                <div class="input-field">
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Supply price</label>
                </div>
            </div>
            <div class="material">
                <a class='dropdown-trigger btn' href='#' data-target='account-topbar'><i class="material-icons right"><input type="text" id="autocomplete-input" class="autocomplete"> arrow_drop_down</i></a>

                <!-- Dropdown Structure -->
                <ul id='account-topbar' class='dropdown-content'>
                    <li><a href="#!">Setting</a></li>
                    <li><a href="#!">Logout</a></li>
                </ul>
                <div class="notice">
                    <a href="" class="material-icons">priority_high</a>
                    <a href="" class="material-icons">priority_high</a>
                    <a href="" class="material-icons">priority_high</a>
                </div>
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
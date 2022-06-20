<?php
include "temp/header.php"
?>

<!-- section untuk edit data di catalogue  -->
<section id="edit_catalogue">
    <div class="title">
        <span><a href="./">Home</a> / <span class="second-text">Edit Product</span></span>
        <h4>Edit Product</h4>
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
                <div class="drop">
                    <span class='dropdown-trigger' href='#' data-target='dropdown1'>Wood<i class="material-icons">arrow_drop_down</i></span>
                    <!-- Dropdown Structure -->
                    <ul id='account-topbar' class='dropdown-content'>
                        <li><a href="#!">Fabric</a></li>
                        <li><a href="#!">PU Fabric</a></li>
                    </ul>

                    <a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>

                </div>
                <div class="drop">
                    <span class='dropdown-trigger' href='#' data-target='dropdown1'>Fabric<i class="material-icons">arrow_drop_down</i></span>
                    <!-- Dropdown Structure -->
                    <ul id='account-topbar' class='dropdown-content'>
                        <li><a href="#!">Fabric</a></li>
                        <li><a href="#!">PU Fabric</a></li>
                    </ul>
                    <a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                </div>
                <div class="drop">
                    <span class='dropdown-trigger' href='#' data-target='dropdown1'>PU Fabric<i class="material-icons">arrow_drop_down</i></span>
                    <!-- Dropdown Structure -->
                    <ul id='account-topbar' class='dropdown-content'>
                        <li><a href="#!">Fabric</a></li>
                        <li><a href="#!">PU</a></li>
                    </ul>
                    <a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                </div>
            </div>
        </div>
        <div class="fabric col s4">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Color</th>
                        <th>Normal Price</th>
                    </tr>
                </thead>
                <!-- item  -->
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><i class="material-icons">panorama</i></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- form material PU fabri  -->
        <div class="col s4 PUfab">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Color</th>
                        <th>Normal Price</th>
                    </tr>
                </thead>
                <!-- item  -->
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><img src="images/bono.jpg" alt="" srcset=""></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="items">
                    <tr>
                        <td>112</td>
                        <td><i class="material-icons">panorama</i></td>
                        <td class="colors">
                            <span class='dropdown-trigger' href='#' data-target='dropdown1'>Grey<i class="material-icons">arrow_drop_down</i></span>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Blue</a></li>
                                <li><a href="#!">Red</a></li>
                            </ul>
                        </td>
                        <td>
                            <span class="price">Rp.1,500,000</span><a class="btn-floating btn-small waves-effect waves-light red notice"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- akhir section untuk edit  -->

<?php
include "temp/footer.php"
?>
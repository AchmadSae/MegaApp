<?php
include "layout/header.php"
?>

<!-- section untuk detail product di catalogue  -->
<section id="detail_catalogue">
    <!-- title section  -->

    <div class="col s12 title">
        <span>View Product</span>
    </div>
    <!-- column action section  -->
    <div class="row alls">
        <!-- action detail  -->
        <div class="col s2">
            <div class="detail">
                <img src="images/bono.jpg" alt="" srcset="">
                <div class="desc">
                    <div class="kiri">
                        <ul>
                            <li>ID</li>
                            <li>Name</li>
                            <li>Detail</li>
                            <li>Korean</li>
                            <li>SKU</li>
                            <li>Web Number</li>
                            <hr>
                            <li>Category</li>
                            <li>Material</li>
                            <li>Color</li>
                            <li>Seater</li>
                            <li>Slot</li>
                            <li>Tier</li>
                            <hr>
                            <li>Supply Price</li>
                            <li>Normal Price</li>
                            <li>Curent Price</li>

                        </ul>
                    </div>
                    <div class="kanan">
                        <ul>
                            <li>112</li>
                            <li>Bono</li>
                            <li>Sofa 2 Dudukan</li>
                            <li>101 XXXXXXX</li>
                            <li>ASJSKIAIORDS</li>
                            <li>15401019</li>
                            <hr>
                            <li>Sofa</li>
                            <li>Fabric</li>
                            <li>Grey</li>
                            <li>2</li>
                            <li>1</li>
                            <li>-</li>
                            <hr>
                            <li>Rp.2,900,000</li>
                            <li>Rp.3,100,000</li>
                            <li>Rp.2,980,000</li>
                        </ul>
                    </div>
                </div>
                <div class="discont">
                    <a href="" class="listDisc">amayzing sale</a>
                    <a href="" class="listDisc">gray sale</a>
                    <a href="" class="listDisc">mid sale</a>
                </div>
            </div>
        </div>
        <!-- action detail & delet update  -->
        <div class="col s2">
            <div class="crud">
                <div class="vendor">
                    <p>Vendor</p>
                    <span>HUIZHOI QIANYI CO.Ltd</span>
                    <p>Factory number:140</p>
                    <span>HUIZHOI QIANYI CO.Ltd</span>
                    <p>Factory number:140</p>
                    <span>HUIZHOI QIANYI CO.Ltd</span>
                    <p>Factory number:140</p>

                </div>
                <div class="register">
                    <ul>
                        <li class="kiri">aMayzing Sale</li>
                        <li class="kiri">PayDay Sale</li>
                        <li class="kiri">Juny Campaign</li>
                    </ul>
                    <ul>
                        <li class="kanan">1 May 2022 - 24 May 2022</li>
                        <li class="kanan">25 May 2022 - 30 May 2022</li>
                        <li class="kanan">1 Juni 2022 - 15 Juni 2022</li>
                    </ul>
                </div>
                <div class="total">
                    <ul>
                        <li class="kiri">Total sale quantity</li>
                        <li class="kiri">This month sale quantity</li>
                        <li class="kiri">This week sale quantity</li>
                        <hr>
                        <li class="kiri">Total purchase quantity</li>
                        <li class="kiri">This month quantity</li>
                        <li class="kiri">This week quantity</li>
                        <li class="kiri" style="opacity:100%; font-weight:bold;">Curent stock</li>
                    </ul>

                    <ul>
                        <li class="kanan">1456</li>
                        <li class="kanan">13</li>
                        <li class="kanan">2</li>
                        <hr>
                        <li class="kanan">2500</li>
                        <li class="kanan">0</li>
                        <li class="kanan">0</li>
                        <li class="kanan" style="font-weight:bold;">100</li>
                    </ul>
                </div>
                <div class="btns">
                    <a href="" class="btn btnEdit">Edit</a>
                    <a href="" class="btn btnDelete">Delete</a>
                </div>
            </div>
        </div>
        <!-- grafic da tabel tahunan  -->
        <div class="col s4">
            <div class="grafYears">


                <div class="graf">
                    <p>This year statistic</p>
                    <div class="chart" id="chartLine1">
                        <!-- content chart -->
                    </div>
                    <div class="tables">
                        <p>This year by channel</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Channel</th>
                                    <th>AVG.Sale</th>
                                    <th>Sale</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Showroom</td>
                                    <td>Rp.5,74M</td>
                                    <td>Rp.45,8M</td>
                                </tr>
                                <tr>
                                    <td>Showroom</td>
                                    <td>Rp.5,74M</td>
                                    <td>Rp.45,8M</td>
                                </tr>
                                <tr>
                                    <td>Showroom</td>
                                    <td>Rp.5,74M</td>
                                    <td>Rp.45,8M</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- grafic dan tabel bulanan  -->
        <div class="col s4">
            <div class="grafMonth">


                <div class="graf">
                    <p>This month statistic</p>
                    <div class="chart" id="chartLine2">
                        <!-- content chart -->
                    </div>
                </div>
                <div class="tables">
                    <p>This month by Channel</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Channel</th>
                                <th>AVG.Sale</th>
                                <th>Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Showroom</td>
                                <td>Rp.5,74M</td>
                                <td>Rp.45,8M</td>
                            </tr>
                            <tr>
                                <td>Showroom</td>
                                <td>Rp.5,74M</td>
                                <td>Rp.45,8M</td>
                            </tr>
                            <tr>
                                <td>Showroom</td>
                                <td>Rp.5,74M</td>
                                <td>Rp.45,8M</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- div penutup content include topbar  -->
    </div>
    <!-- div penutup wraper include sidebar  -->

</section>

<!-- akhir section untuk detail product di catalogue  -->



<?php
include "layout/footer.php"
?>
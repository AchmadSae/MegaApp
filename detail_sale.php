<?php
include "temp/header.php";
?>
<!-- title  -->
<section id="detail-sale">
    <span><a href="./">Home</a> / <span class="second-text">Detail Sale</span></span>
    <h4>Detail Sale</h4>
    <div class="detail-sale">
        <div class="row">
            <div class="col s3 invoice">
                <!-- invoice -->
                <div class="tag detail-col">
                    <p class="no-inovice">INV2122123123
                    <p>
                        <hr>
                    <div class="detail">
                        <ul>
                            <li class="l">Order Date</li>
                            <li class="l">Channel</li>
                            <li class="l">Order Code</li>
                        </ul>
                        <ul>
                            <li class="r">1212</li>
                            <li class="r">showroom</li>
                            <li class="r">D128191</li>
                        </ul>
                    </div>
                </div>
                <!-- customer -->
                <div class="tag customer-col mt-2">
                    <p class="title">Custommer</p>
                    <hr>
                    <div class="detail">
                        <ul>
                            <li class="l">Nama</li>
                            <li class="l">Phone</li>
                        </ul>
                        <ul>
                            <li class="r">Achmad Saepudin</li>
                            <li class="r">1021219829</li>
                        </ul>
                    </div>
                </div>
                <!-- recepient -->
                <div class="recepient-col mt-2">
                    <p class="title">Recepiant</p>
                    <hr>
                    <div class="detail">
                        <ul>
                            <li class="l">Nama</li>
                            <li class="l">Phone</li>
                            <li class="l">Alamat</li>
                        </ul>
                        <ul>
                            <li class="r">Achmad Saepudin</li>
                            <li class="r">10020202</li>
                            <li class="r">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, itaque!</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s6 table-invoice">
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="withImg">
                            <img src="images/bono.jpg" alt="" srcset="">
                            <!-- action detail  -->
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
                        <div class="details">
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
                    </div>
                </div>
                <!-- pop up untuk detail product -->

                <!-- list data di table  -->
                <table class="responsive-table striped tables" style="overflow-x:auto;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Material</th>
                            <th>Color</th>
                            <th>SKU</th>
                            <th>Supply Price</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <!-- Modal Trigger -->
                            <td data-target="modal1" class="modal-trigger">
                                BONO SOFA 2P
                            </td>
                            <td>Fabric</td>
                            <td>Gray</td>
                            <td>112</td>
                            <td>Rp.350,000</td>
                            <td>Rp.165,000</td>
                            <td>1</td>
                            <td>Rp.150,000</td>
                        </tr>
                        <tr>
                            <td>707 IRON stand hanger ( A tipe )</td>
                            <td>Metal</td>
                            <td>Black</td>
                            <td>112</td>
                            <td>Rp.350,000</td>
                            <td>Rp.165,000</td>
                            <td>1</td>
                            <td>Rp.150,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s3 total">
                <p style="font-weight:bold; Opacity:70%;">Discount</p>
                <div class="total-text">
                    <ul>
                        <li class="kiri">Voucher</li>
                        <li class="kiri">Extra Discount</li>
                        <li class="kiri">Shipping cost internal</li>
                        <li class="kiri">Shipping cost external</li>
                        <li class="kiri">Adjustment</li>
                        <li class="kiri">Merchant Fee</li>
                        <hr>
                        <li class="kiri" style="font-weight:bold; Opacity:100%;">Grand total</li>
                    </ul>
                    <ul>
                        <li class="kanan">Rp.3,900,000</li>
                        <li class="kanan">Rp.3,900,000</li>
                        <li class="kanan">Rp.3,900,000</li>
                        <li class="kanan">Rp.3,900,000</li>
                        <li class="kanan">Rp.3,900,000</li>
                        <li class="kanan">Rp.3,900,000</li>
                        <hr>
                        <li class="kanan" style="font-weight:bold;">Rp.3,900,000</li>
                    </ul>
                </div>
                <div class="operation-btn">
                    <a class="waves-effect waves-light btn edit">Edit</a> <a class="waves-effect waves-light btn hapus">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "temp/footer.php";
?>
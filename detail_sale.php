<?php 
    include "layout/header.php";
?>
<!-- title  -->
<section class="detail-sale mt-4">
    <div class="title-step">
           <h4>Domestic Sale</h4>
            </div>      
    </div>
    <div class="row">
        <div class="col s1 invoice">
            <!-- invoice -->
            <div class="tag detail-col">
                <p class="no-inovice">INV2122123123<p>
                <hr>
                    <div class="detail">
                        <ul>
                            <li  class="l">Order Date</li>
                            <li class="l">Channel</li>
                            <li class="l">Order Code</li>
                        </ul>
                        <ul >
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
                            <li  class="l">Nama</li>
                            <li class="l">Phone</li>
                        </ul>
                        <ul >
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
                            <li  class="l">Nama</li>
                            <li class="l">Phone</li>
                            <li class="l">Alamat</li>
                        </ul>
                        <ul >
                            <li class="r">Achmad Saepudin</li>
                            <li class="r">10020202</li>
                            <li class="r">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, itaque!</li>
                            
                        </ul>
                    </div>
            </div>
        </div>
    <div class="col s10 table-invoice">
            <!-- pop up untuk detail product -->
                <div class="modal fade mt-4" id="staticBackdrop"tabindex="-1" aria-labelledby="staticBackdropLabel"
                    style="width : 600px;
                    height:1000px;"
                    >
                        <div class="modal-dialog "
                            style="width:600px ; height:1000px">

                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">BONO SOFA 2P</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- deskripsi produk  -->
                            <div class="modal-body" style="font-size:10px;">
                                <div class="row">
                                    <div class="col md-6 ">
                                    <img src="images/bono.jpg" alt="" srcset="" style="width: 100%; height: 120px;">
                                       <div style="display: inline-flex;">
                                       <div class="left" style="opacity: 70%;font-size:10px;">
                                            <p>ID</p>
                                            <p>Name</p>
                                            <p>Detail</p>
                                            <p>Korean</p>
                                            <p>SKU</p>
                                            <p>WEB Number</p>
                                            <hr>
                                            <p>Category</p>
                                            <p>Material</p>
                                            <p>Color</p>
                                            <p>Seater</p>
                                            <p>Slot</p>
                                            <p>Tier</p>
                                            <hr>
                                            <p>Supply Price</p>
                                            <p>Web Price</p>
                                            <p>Current Price</p>

                                        </div>
                                        <div class="isi" style="padding-left: 30px;">
                                            <p>112</p>
                                            <p>Bono</p>
                                            <p>Sofa 2 Dudukan</p>
                                            <p>101 | XXXX</p>
                                            <p>ABCDAUOEAE</p>
                                            <p>8020208</p>
                                            <hr>
                                            <p>Sofa</p>
                                            <p>Fabric</p>
                                            <p>Gray</p>
                                            <p>2</p>
                                            <p>1</p>
                                            <p>-</p>
                                            <hr>
                                            <p>Rp.2,121,121</p>
                                            <p>Rp.2,312,121</p>
                                            <p>Rp.2,412,121</p>
                                        </div>
                                       </div>
                                       <div class="btn">
                                       <button type="button" class="btn btn-primary disabled" style="width: 80px;  height:20px; font-size: 8px;">flash sale</button>
                                       <button type="button" class="btn btn-primary disabled" style="width: 80px;  height:20px; font-size: 8px;">flash sale</button>
                                       <button type="button" class="btn btn-primary disabled" style="width:80px;  height:20px; font-size:8px;">flash sale</button>
                                        </div>
                                    </div>
                                    <div class="col md-6">
                                        <div class="vendro">
                                            <p style="opacity:70%;">Vendor</p>
                                            <p style="font-weight:bold;">HUIZHOU YIANJI CO.Ltd</p>
                                            <p style="opacity:70%;">Factory number : 140</p>
                                            <p style="font-weight:bold;">HUIZHOU YIANJI CO.Ltd</p>
                                            <p style="opacity:70%;">Factory number : 140</p>
                                            <p style="font-weight:bold;">HUIZHOU YIANJI CO.Ltd</p>
                                        </div>
                                        <hr>
                                        <div class="register" style="display:inline-flex;">
                                            <div class="campaign">
                                            <p style="font-weight:bold;">amayzing sale</p>
                                            <p style="font-weight:bold;">amayzing sale</p>
                                            <p style="font-weight:bold;">amayzing sale</p>
                                            </div>
                                            <div class="isi">
                                                <p style="opacity:70%;"> 1 May 2022 - 30 May 2022</p>
                                                <p style="opacity:70%;"> 1 May 2022 - 30 May 2022</p>
                                                <p style="opacity:70%;">1 May 2022 - 30 May 2022</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="total" style="display:inline-flex;">
                                            <div class="left">
                                                <p style="opacity:70%;">Total Sales Quantity</p>
                                                <p style="opacity:70%;">This Month Sales Quantity</p>
                                                <p style="opacity:70%;">This Week Sales Quantity</p>
                                                <hr>
                                                <p style="opacity:70%;">Total Purchase Quantity</p>
                                                <p style="opacity:70%;">This Month Purchase Quantity</p>
                                                <p style="opacity:70%;">This Week Purchase Quantity</p>
                                                <p style="opacity:70%;">Current Stock</p>
                                            
                                            </div>
                                            <div class="isi">
                                                <p style="font-weight:bold;">1456</p>
                                                <p style="font-weight:bold;">22</p>
                                                <p style="font-weight:bold;">12</p>
                                                <hr>
                                                <p style="font-weight:bold;">2</p>
                                                <p style="font-weight:bold;">1</p>
                                                <p style="font-weight:bold;">1</p>
                                                <p style="font-weight:bold;">21</p>
                                            </div>
                                        </div>
                                     </div>
                                </div>    

                            </div>
                            <!-- deksripsi produk  -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                </div>
            <!-- pop up untuk detail product -->

            <!-- list data di table  -->
        <table class="responsive-table striped tables">
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
              <td data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="myPopUp">
                  BONO SOFA 2P
                </td>
              <td>Metal</td>
              <td>Black</td>
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
        <div class="col s1 total">
           <span>Discount</span>
                <p>Rp.36,000</p>
            <span>Voucher</span>
                <p>Rp.36,000</p>
            <span>Extra Discount</span>
                <p>Rp.36,000</p>
            <span>Shipping Cost Internal</span>
                <p>Rp.36,000</p>
            <span>Shipping Cost External</span>
                <p>Rp.36,000</p>
            <span>Adjustment</span>
                <p>Rp.36,000</p>
            <span>Merchant Fee</span>
                <p>Rp.36,000</p>
            <span>Grand Total</span>
                <h4>Rp.36,000</h4>
                <div class="operation-btn">
                <a class="waves-effect waves-light btn edit">Edit</a> <a class="waves-effect waves-light btn hapus">Hapus</a>
                </div>
        </div>
    </div>
</section>
<?php 
    include "layout/footer.php";
 ?>
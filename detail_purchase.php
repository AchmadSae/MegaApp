<?php 
    include "layout/header.php";
?>
<!-- title  -->
<section class="detail-purchase mt-5">
    <div class="title-step">
           <h4>View Purchase Invoice</h4>
            </div>      
    </div>
    <div class="row">
        <div class="col s1 invoice">
            <!-- invoice -->
            <div class="tag detail-col">
                <div class="inv">
                    <p style="opacity: 70%;">INVOICE</p>
                    <p class="no-inovice" style="margin-left:20px;">INV2122123123<p>
                </div>
                <hr>
                    <div class="detail">
                        <ul>
                            <li  class="l">Order Date</li>
                            <li class="l">Payment</li>
                            <li class="l">Account</li>
                            <li  class="l">Status</li>
                            <li class="l">Delivered</li>
                            <li class="l">Shiper</li>
                        </ul>
                        <ul >
                            <li class="r">14 May 2022</li>
                            <li class="r">Online Paymant</li>
                            <li class="r">646 67 68</li>
                            <li class="r">Delivered</li>
                            <li class="r">16 May 2022</li>
                            <li class="r">GoBox</li>
                        </ul>
                    </div>
             </div>
            <!-- Recepient -->
            <div class="tag recepient-col mt-2">
                <p class="title">Recepient</p>
                <hr>
                    <div class="detail">
                        <ul>
                            <li  class="l">Location</li>
                            <li class="l">PIC</li>
                            <li class="l">Phone</li>
                        </ul>
                        <ul >
                            <li class="r">Gudang Bekasi</li>
                            <li class="r">Yusmen</li>
                            <li class="r">0814 1342 2201</li>
                        </ul>
                    </div>
             </div>
            <!-- Vendor -->
            <div class="vendor-col mt-2">
                <p class="title">Vendor</p>
                <hr>
                    <div class="detail">
                        <ul>
                            <li  class="l">Vendor</li>
                            <li class="l">Account</li>
                            <li class="l">PIC</li>
                            <li class="l">Phone</li>
                            <li class="l">Adddres</li>
                        </ul>
                        <ul >
                            <li class="r">Toraya</li>
                            <li class="r">100 202 102</li>
                            <li class="r">Joko</li>
                            <li class="r">0814 1342 2201</li>
                            <li class="r">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, itaque!</li>
                            
                        </ul>
                    </div>
            </div>
        </div>
    <div class="col s10 table-purchase">
            <!-- pop up untuk detail product -->
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
              <td data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="myPopUp">
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


        <div class="col s1 total">
           <span>Discount</span>
                <p>Rp.36,000</p>
            <span>Tax ( % )</span>
                <p>11% - Rp.36,000</p>
            <span>Shiping cost</span>
                <p>Rp.36,000</p>
            <hr>
            <span>Grand Total</span>
                <h4>Rp.3.500,000</h4>
                <div class="operation-btn">
                <a class="waves-effect waves-light btn edit">Edit</a> <a class="waves-effect waves-light btn hapus">Hapus</a>
                </div>
        </div>
    </div>
</section>
<?php 
    include "layout/footer.php";
 ?>
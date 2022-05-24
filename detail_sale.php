<?php 
    include "layout/header.php";
?>

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
              <td>707 IRON stand hanger ( A tipe )</td>
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
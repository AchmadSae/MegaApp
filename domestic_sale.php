<?php 
  include "layout/header.php";
?>

<section class="domestic-sales">
  <div class="row">
       <div class="col s12 title-step">
           <h4>Domestic Sale</h4>
            <div class="btn-add">
              <a class="waves-effect waves-light btn">Add New Sale</a>   
             </div>
    </div>
  </div>

    <div class="row">
          <!-- display table -->
      <div class="col s11" id="table-sales">
        <table class="striped table-sales">
          <thead>
            <tr>
                <th>Date</th>
                <th>Invoice</th>
                <th>Channel</th>
                <th>Order Code</th>
                <th>Name</th>
                <th>Total sales</th>
                <th>Payment</th>
                <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>14 May 2022</td>
              <td>INV/2022/2669</td>
              <td>Dekoruma</td>
              <td>2839173731937</td>
              <td>Husna Cindi Damayanti</td>
              <td>Rp. 1.050.300</td>
              <td>online payment</td>
              <td>
                  <a class="waves-effect waves-light btn"  href="detail_sale.php">waiting list</a>
              </td>
            </tr>
            <tr>
              <td>14 May 2022</td>
              <td>INV/2022/2669</td>
              <td>Dekoruma</td>
              <td>2839173731937</td>
              <td>Husna Cindi Damayanti</td>
              <td>Rp. 1.050.300</td>
              <td>online payment</td>
              <td>
                  <a class="waves-effect waves-light btn"  href="detail_sale.php">waiting list</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col s1">
          <div class="operation-sales">
            <p class="search">Search</p>
            <div class="input-field">
              <i class="material-icons prefix">youtube_searched_for</i>
              <input type="text" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">cari invoice</label>
            </div>
              <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Filter</a>

              <!-- Dropdown Structure -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Date</a></li>
                    <li><a href="#!">Delivery</a></li>
                    <li><a href="#!">Invoice</a></li>
                  </ul>
                  <!-- radio btn filter data  -->
                  <p class="mt-2">Urutkan</p>
                  <form action="#">
                  <p>
                    <label>
                      <input class="with-gap" name="group1" type="radio"  />
                      <span>Asscending ( A - Z )</span>
                    </label>
                    <label>
                      <input class="with-gap" name="group1" type="radio"  />
                      <span>Descending ( Z - A )</span>
                    </label>
                  </p>


                  </form>
          </div>
        </div>


</section>

<?php 
  include "layout/footer.php";
?>
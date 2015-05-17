<?php 

 ?>


<div class='container'>
  <div class="row">
    <div class="col-md-3">
      <form>
        <input type='text'>
        <input type='submit' value='Search!'>
      </form>
    </div>
  </div>
</div>

<div class='container'>
  <div class="row">
    <div class="col-md-3 col-md-offset-9">
      <h4>Sort by:</h4>
      <select class="form-control" name='status' form='sortby'>
        <option>All</option>
        <option>In Process</option>
        <option>Shipped</option>
      </select>
      <form action="#" id="sortby">
        <input type="submit">
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="table-responsive">           
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Name</th>
          <th>Date</th>
          <th>Billing Address</th>
          <th>Total</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
<?php 
            foreach ($orders as $order) 
            {
?>
               <tr>
                <td><a href="#"> <?php echo $order['id'] ?> </a></td>
                <td> <?php echo $order['first_name'] ?> </td>
                <td> <?php echo 'datetime' ?></td>
                <td> <?php echo $order['address'] ?></td>
                <td> <?php echo $order['total'] ?></td>
                <td>
                 <select class="form-control" name='status' form='orderid#'>
                  <option>Order in process</option>
                  <option>Shipped</option>
                  <option>Cancelled</option>
                 </select>
                 <form action="#" id="orderid#">
                   <input type="submit">
                 </form>
                </td>
               </tr>
<?php
            }                
?>
      </tbody>
    </table>
  </div>
</div>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
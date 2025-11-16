<?php

$title = 'Orders';
?>

<!doctype html>
<html lang="en">

  <!-- Head -->
  <?php
  include 'components/head.php';
  ?>
  <body>

<!-- Navbar -->
  <?php
  include 'components/navbar.php'
  ?>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar Menu -->
    <?php
    include 'components/sidebar.php';
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Orders</h1>        
      </div>
      <a href="product-form.html" class="btn btn-success text-white mb-3 float-right"><i class="fas fa-plus-square"></i> New Product</a>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Invoice #</th>
              <th>Customer Name</th>              
              <th>Date</th>
              <th>Subtotal</th>
              <th>Tax</th>
              <th>Total</th>
            </tr>
          </thead>
          <?php
            include 'functions/orders.php';
            $orders = getAllOrders();
          ?>
          <tbody>
            <?php
              foreach($orders as $order) {
            ?>
            <tr>
              <td><?=$order['cus_code']?></td>
              <td><?=$order['cus_fname']?> <?=$order['cus_lname']?></td>
              <td><?=(new DateTime($order['inv_date']))->format("d M Y")?></td>
              <td><?=number_format($order['inv_subtotal'], 2)?></td>
              <td><?=number_format($order['inv_tax'], 2)?></td>
              <td><?=number_format($order['inv_total'], 2)?></td>
              <td>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">                  
                  <label class="btn btn-primary btn-sm">
                    <a href="" class="text-white"><i class="fas fa-pen"></i></a>
                  </label>
                  <label class="btn btn-danger btn-sm">
                    <a href="" class="text-white"><i class="fas fa-trash"></i></a>
                  </label>
                </div>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>
<?php
session_start();
if(isset($_SESSION["shoppingCart"])){

    $shoppingCart = $_SESSION["shoppingCart"];
    $total_count = $shoppingCart["summary"]["total_count"];
    $total_price = $shoppingCart["summary"]["total_price"];
    $shopping_products = $shoppingCart["products"];
} 

else {
    $total_count = 0;
    $total_price = 0.0;



}
?>

<!-------------------------------#HEADER------------------------------------->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">kablosuzMarket</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Ürünler</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="shopping-cart.php">
          <span class="bi bi-cart cart-icon"></span> <!-- Alışveriş Sepeti Simgesi -->
          <span class="badge cart-count"><?php echo $total_count; ?></span> <!-- Sepet Miktarı -->
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
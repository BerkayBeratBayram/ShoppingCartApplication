<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<?php include 'lib/navbar.php';
require_once 'lib/db.php';
?>


<!-------------------------------VERİLERİ ÇEKME BÖLÜMÜ------------------------------------->
<?php

$products = $db->query("SELECT * from products", PDO:: FETCH_OBJ)->fetchAll();

?>
   

<!-------------------------------MAİN CONTENT------------------------------------->
<div class="container">
<h2 class="text-center mt-3">Ürün Listesi</h2>
<hr>
<div class="row">

<?php foreach ($products as $product) { ?>
  <div class="col-sm-6 col-md-3">
    <div class="card">
      <img src="assets/images/<?php echo $product->img_url;?>" class="card-img-top" alt="kedi-mamasi">
      <div class="card-body">
        <h3 class="card-title"><?php echo $product->product_name;?></h3>
        <p class="card-text"><?php echo $product->detail;?></p>
        <p class="text-end price-container"><strong><?php echo $product->price;?> TL</strong></p>
        <button product-id="<?php echo $product->id; ?>" class="btn btn-primary w-100 addToCartBtn" role="button">
          <i class="bi bi-cart cart-icon"></i> Sepete Ekle
        </button>
      </div>
    </div>
  </div>
  
  <?php } ?>
 </div>
</div>

<!-------------------------------MAİN CONTENT------------------------------------->


<!-- Scripts -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>

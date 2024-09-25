<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<?php include 'lib/navbar.php';
?>
<!-------------------------------MAİN CONTENT------------------------------------->

<div class="container">
    <?php if($total_count > 0) { ?>
        <h2 class="text-center mt-3">Sepetinizde <strong class="text-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır</h2>



    <hr>

    <div class="row">
    <div class="col-md-8 offset-md-2">

        <table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
        <th class="text-center">Ürün Resmi</th>
        <th class="text-center">Ürün Adı</th>
        <th class="text-center">Fiyatı</th>
        <th class="text-center">Adedi</th>
        <th class="text-center">Toplam</th>
        <th class="text-center">Sepetten Çıkar</th>
        </tr>
    </thead>
    <tbody>
    
<?php foreach($shopping_products as $product) { ?> 

    <tr>

    <td class="text-center" width="120px">
    <img src="assets/images/<?php echo $product->img_url;?>" alt="" width="50px">
    </td>
    <td class="text-center"><?php echo $product->product_name;?></td>
    <td class="text-center"><strong><?php echo $product->price;?></strong></td>
    <td class="text-center">

    <a href="lib/cart_db.php?p=incCount&product_id=<?php echo $product->id;?>" class="btn btn-sm btn-success">
    <i class="bi bi-plus"></i>
    </a>

    <input type="text" class="item-count-input" value="<?php echo $product->count;?>">

    <a href="lib/cart_db.php?p=decCount&product_id=<?php echo $product->id;?>" class="btn btn-sm btn-danger">
    <i class="bi bi-dash"></i>
    </a>

    </td>
    <td class="text-center"><?php echo $product->total_price;?></td>
    <td class="text-center" width="120">
    <button product-id="<?php echo $product->id;?>" class="btn btn-sm btn-danger removeFromCartBtn">
    <i class="bi bi-x"></i>
    Sepetten Çıkar

</>


</td>

</tr>



<?php } ?>




    </tbody>

    <tfoot>

    <th colspan="2" class="text-end">
        Toplam Ürün : <span class="text-danger"><?php echo $total_count;?></span>
    <th colspan="4" class="text-end">
        Toplam Tutar : <span class="text-danger"><?php echo $total_price;?></span>
    </th>

    </tfoot>



    </table>




    </div>

    </div>



        <?php } else {?>
        
        <div class="alert alert-info">
        <strong>Sepetinizde henüz bir ürün bulunmamaktadır. Eklemek için <a href="index.php">tıklayınız</a></strong>

        </div> 
             


        <?php   } ?>


    
</div>













<!-------------------------------MAİN CONTENT------------------------------------->

    
<!-- Scripts -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
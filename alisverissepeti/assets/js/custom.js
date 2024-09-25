$(document).ready(function() {
    // Sepete ekle butonu
    $(".addToCartBtn").click(function() {
        var url = "http://localhost/alisverissepeti/lib/cart_db.php";
        var data = {
            p: "addToCart",
            product_id: $(this).attr("product-id")
        };
        $.post(url, data, function(response) {
            console.log(response); // Yanıtı konsola yazdır
            $(".cart-count").text(response); // Sepet ikonundaki ürün sayısını güncelle
        });
    });

    // Sepetten çıkar butonu
    $(".removeFromCartBtn").click(function() {
        var url = "http://localhost/alisverissepeti/lib/cart_db.php";
        var data = {
            p: "removeFromCart",
            product_id: $(this).attr("product-id")
        };
        $.post(url, data, function(response) {
            console.log(response); // Yanıtı konsola yazdır
            window.location.reload();

        });
    });
});

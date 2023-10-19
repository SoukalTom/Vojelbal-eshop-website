<?php
$stmt = $pdo->prepare("SELECT * FROM productstb WHERE product_category2='bottle' ");
$stmt->execute();
?>

<?=template_header('All')?>

<?php foreach ($stmt as $product): ?>
<div class="products-product-container">
    <a class="products-product" href="<?=$product['product_link']?>">
        <img class="product-img" src="<?=$product['product_image']?>">
        <p class="product-name"> <?=$product['product_name']?> </p>
        <p class="product-price"> <?=$product['product_price']?> Kč </p>
    </a>
    <button class="add-to-cart-btn"> Přidat do košíku </button>
</div>
<?php endforeach; ?>
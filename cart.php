<?php require 'inc/head.php';


if (empty($_SESSION['username'])) {
    header('Location: /login.php');
};

if (!empty($_COOKIE['cart'])) {
    $products = unserialize($_COOKIE['cart']);
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($products as $product) :?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/product-<?= $product ?>.jpg" alt="cookies choclate chips" class="img-responsive">
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

<?php
if (!$_SESSION) {
    header("location: login");
}
$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
require_once "src/Template/__header.html";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/zephyr/bootstrap.rtl.min.css">


</head>
<body>
<div class="d-flex justify-center-content container mt-2 mb-3">
    <h2><b>Retrouvez tous nos produits</h2>
</div>

<section class="d-flex container">
    <?php foreach ($productPaginate['products'] as $product): ?>
        <div class="card mb-3 w-25 mx-1">
            <h3 class="card-header"><?= $product['name'] ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200"
                 aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice"
                 viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
            </svg>
            <div class="card-body">
                <h5 class="card-text">Description :</h5>
                <p><?= $product['description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Prix:</h5>
                    <p><?= $product['price'] ?>€</p></li>
                <li class="list-group-item"><h5>Quantité:</h5>
                    <p><?= $product['quantity'] ?></p></li>

            </ul>
            <div class="card-footer text-muted">
                <a href="product/<?= $product['id']; ?>" class="card-link btn btn-primary">Voir le produit</a>
        </div>
    <?php endforeach; ?>

</section>
<div class="container d-flex justify-center-content">
    <ul class="pagination">
        <?php if ($currentPage > 1): ?>
            <li class="page-item ">
                <a class="page-link" href="/my-little-mvc/shop?page=<?= $currentPage - 1 ?>">Page précédente</a>
            </li>
        <?php endif; ?>

        <?php if ($currentPage < $productPaginate['totalPages']): ?>
            <li class="page-item">
                <a class="page-link" href="/my-little-mvc/shop?page=<?= $currentPage + 1 ?>">Page suivante</a>
            </li>

        <?php endif; ?>
</div>

</body>
</html>

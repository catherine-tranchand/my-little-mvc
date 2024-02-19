<?php


namespace App\Model;

use App\Model\Abstract\AbstractProduct;
use PDO;

class Product extends AbstractProduct
{
    public function findPaginated($page)
    {

        $limit = 5;
        $offset = ($page - 1) * $limit;
        $pdo = new PDO('mysql:host=localhost:5432;dbname=mvc', 'user', 'pass');
        $totalProducts = $pdo->query("SELECT COUNT(*) FROM product")->fetchColumn();
        $totalPages = $totalProducts / $limit;

        $sql = $pdo->prepare("SELECT * FROM product LIMIT :limit OFFSET :offset");
        $sql->bindValue(':limit', $limit, PDO::PARAM_INT);
        $sql->bindValue(':offset', $offset, PDO::PARAM_INT);
        $sql->execute();

        $products = $sql->fetchAll(PDO::FETCH_ASSOC);

        return [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'totalPages' => $totalPages
            ];
    }


}
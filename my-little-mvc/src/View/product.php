<?php

require_once "../../vendor/autoload.php";

use App\Model\Clothing;
use App\Model\Electronic;

if (isset($_GET['id_product']) && isset($_GET['product_type'])){
   $id_product = $_GET['id_product'];
   $product_type = $_GET['product_type'];

   if (filter_var($id_product, FILTER_VALIDATE_INT)) {

       if ($product_type === 'electronic'){
           $productModel = new Electronic();
       }

       if ($product_type === 'clothing'){
           $product_type = new Clothing();
       }
   }else{
       echo "Type de produit non valide";
       exit;
   }
    $product = $productModel->findOneById($id_product);

   if($product){
       echo "<h1>Détails du produit</h1>";
       echo "<p>Nom: " . $product->getName() . "</p>";
       echo "<p>Quantity: " . $product->getQuantity() . "</p>";
       echo "<p>Prix: " . $product->getPrice() . "</p>";
   }else{
       echo "Le produit demandé n'existe pas";
   }

}else{
    echo "Veuillez renseigner un ID et/ou un type de produit !";
}


?>
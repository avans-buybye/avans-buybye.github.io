<!DOCTYPE html>
<html lang="nl">

<head>
<title>buybye</title>
<meta name="keywords"
content="Buybye is een online bestelmiddel waarmee consumenten direct producten kunnen bestellen zonder tussenkomt van winkelwagens en langdurige bestelprocedures." />
<meta charset="UTF-8" />
<link href="../css/mystyle.css" type="text/css" rel="stylesheet" />
<body>

<?php
  require_once 'controller/ProductController.php';
  // create a productController Object
  $productController = new ProductController;
  // get a model object from controller
  $product = $productController->get();
?> 

  <main class="contentmain">
    <!-- show form section onclick -->
    <button onclick="myFunction()">+/-</button>

    <section class="addProductShow" id="ShowProductForm">
      <b>Add a new product by filling out this form</b><br><br>
      <!-- addProduct form: gather user input for new product = name, price, link and status -->
      <form action="?controller=ProductController&addProduct" method="post">
        <table>
          <tr> <td>Product Name:</td><td><input type="text" name="name" value="<?= $product->getProductName() ?>"></td></tr>
          <tr> <td>Price: </td><td><input type="float" name="price" value="<?= $product->getProductPrice() ?>"></td></tr>
          <tr> <td>Link to product image: </td><td><input type="text" name="imglink"value="<?= $product->getProductImg() ?>"></td></tr>
          <tr> <td>Product status: </td><td><input type="radio" name="status"value="<?= $product->getProductStatus() ?>">Active
          <input type="radio" name="statusinactive" value="inactive">Inactive</td></tr>
        </table>
        <br><br>
        <input type="submit" value="Add product">  
      </form>
    </section>

  </main>
<script rel="javascript" src="../scripts/script.js"></script>
</body>
</html>
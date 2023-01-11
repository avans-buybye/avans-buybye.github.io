<!DOCTYPE html>
<html lang="nl">

<head>
<title>buybye</title>
<meta name="keywords"
content="Buybye is een online bestelmiddel waarmee consumenten direct producten kunnen bestellen zonder tussenkomt van winkelwagens en langdurige bestelprocedures." />
<meta charset="UTF-8" />
<link href="../css/mystyle.css" type="text/css" rel="stylesheet" />
<body>

  <main class="contentmain">

    <button onclick="myFunction()">+/-</button>

    <section class="addProductShow" id="ShowProductForm">
      <b>Add a new product by filling out this form</b><br><br>
      <form action="?controller=ProductController&action=addProduct" method="post">
        <table>
          <tr> <td>Product Name:</td><td><input type="text" name="nameID"></td></tr>
          <tr> <td>Price: </td><td><input type="float" name="productID"></td></tr>
          <tr> <td>Link to product image: </td><td><input type="text" name="linkID"></td></tr>
          <tr> <td>Product status: </td><td><input type="radio" name="statusactive" value="active">Active
          <input type="radio" name="status" value="statusinactive">Inactive</td></tr>
        </table>
        <br><br>
        <input type="submit" value="Add product">  
      </form>
    </section>

  </main>
<script rel="javascript" src="../scripts/script.js"></script>
</body>
</html>
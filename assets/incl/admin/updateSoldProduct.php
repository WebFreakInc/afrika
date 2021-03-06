<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

//VARIABLES
$id = $_POST['id'];
//PRODUCT SELECTION
$productQuery = "SELECT * FROM products WHERE product_id = ".$id."";
$productResult = $dbConnect ->query($productQuery);
$productRow = $productResult->fetch_assoc();
//SOLD AND EARNINGS ADDUP
$sold = $_POST['sold'];
$price = $_POST['price'];
$gatheredPrice = $price + $productRow['earnings'];
$gatheredSold = $sold + $productRow['sold'];
$singlePrice = $price / $sold;
$amountLeft = $productRow['amount'] - $productRow['sold'];

//CHECK IF LOGGED IN
if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}

$soldQuery = "UPDATE products SET sold = ".$gatheredSold.", earnings = ".$gatheredPrice." WHERE product_id = ".$id."";
$soldResult = $dbConnect->query($soldQuery);


//FEEDBACK
echo "
     <div class='col-md-3 mx-auto'>
        <h3>Vare Registreret Solgt</h3>
        <p> Produkt: $productRow[name]<br>
            Varenummer: $productRow[product_id]<br>
            Solgt $_POST[sold] for $_POST[price]<br>
            Stykpris: $singlePrice<br>
            Normal Pris: $productRow[price]<br>
            Antal Tilbage: $amountLeft<br>
        </p>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";

require 'incl/adminFooter.php';

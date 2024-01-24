<?php  

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("connection to this databse failed due to".mysqli_connect_error());
    }
    // echo"connected successfully to db!<br>";  
    // $productid = $_POST["productid"]
    $productname = $_POST["productName"];
    $sku  = $_POST["sku"];
    $producttype = $_POST["productType"];
    $category = $_POST["category"];
    $manufacturercost = $_POST["manufacturerCost"];
    $shippingcost = $_POST["shippingCost"];
    $totalcost = $_POST["totalCost"];
    $price = $_POST["price"];
    $status = $_POST["status"];
    $createdat = $_POST["createdAt"];
    $updatedat = $_POST["updatedAt"];
    $sql = "INSERT INTO ccc_product (productname,sku,producttype,category,manufacturercost,shippingcost,totalcost,price, status,createdat,updatedat) VALUES ('$productname', '$sku', '$producttype', '$category', '$manufacturercost', '$shippingcost', '$totalcost', '$price', '$status', '$createdat', '$updatedat')";                                                                         
echo $sql;
    if ($con->query($sql) == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>


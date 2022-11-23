<?php require 'init.php';?>
<?php require 'select.php';?>
<?php
// Creating dummy data for test
$con = createCon();
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo("<p> Connection established </p>");
};

selectDatabase($con, 'test');
$orderId = 001;

$firstName = "Wilfredo";

$lastName = "Colina";

$address = "20.00";

$email = "wrca26@gmail.com";
$quantity = 45;
$price = 45.00;


$query = /** @lang text */
    "
INSERT INTO `orders`(
    `orderId`,
    `firstName`,
    `lastName`,
    `address`,
    `email`,
    `quantity`,
    `price`
)
VALUES(
    '$orderId',
    '$firstName',
    '$lastName',
    '$address',
    '$email',
    '$quantity',
    '$price'
);
";

function insertSupply ($connection, $query ){

    if(mysqli_query($connection,$query )){

        echo("<p>record created succesfully </p>");
    }else {
        echo " Error";
    };

};

//insertSupply($con, $query);

if (isset($_POST)){
    header('Content-type: text/javascript');
    echo json_encode($_POST, JSON_PRETTY_PRINT);
}
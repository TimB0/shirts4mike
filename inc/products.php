<?php

function get_list_view_html(
            $product_id, $product) {

    $output = "";
    
    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . '<p>"' . $product["productDescription"] . '"</p>';
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

// Create an empty $products array
$products = array();

// Add each product to the array individually, much cleaner and easier 
// to maintain
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg",
    "productDescription" => "Classic S4M Logo in a Rugged Rusty Red",
    "paypal" => "EM4E5W6BGKVME",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "productDescription" => "Mikes Happy Face in a Charcoal Black",
    "paypal" => "ZES99YYDL3YGJ",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "productDescription" => "Mikes Happy Face in a Superman Blue",
    "paypal" => "M8Z4BP9YGYDQL",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "productDescription" => "Classic S4M Logo in a Metallic Green",
    "paypal" => "SDXBESNL79JRN",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "productDescription" => "Mikes Happy Face in a Mean Mustard",
    "paypal" => "RY5Y8P73X9WB6",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "productDescription" => "Classic S4M Logo in a Sweat Sock Gray",
    "paypal" => "VSCCWZ7UWAG2",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "productDescription" => "Classic S4M Logo in a Bahama Beach Blue",
    "paypal" => "U6FBNAX24CUPW",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "productDescription" => "Mikes Happy Face in a Reese's Pieces Orange",
    "paypal" => "PUDW6STN3U2JY",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "styles" => array("Short Sleeve","Long Sleeve")
);


?>
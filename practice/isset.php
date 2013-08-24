<?php

$flavors = array();

$flavors[1] = "Cake Batter";

$flavors[2] = "Cookie Dough";

if (isset($_GET["id"])) {

    if (isset($flavors[$_GET["id"]])) {

        echo $flavors[$_GET["id"]];

    } else {

        echo "B";

    }

} else {

    echo "A";

}

?>
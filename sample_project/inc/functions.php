<?php
function getThumbnail($id, $item) {
    echo "<li><a href='details.php?id="
        . $id . "'><img src='"
        . $item["img"] . "' alt='"
        . $item["title"] . "'>
                    <p>View Details</p></a></li>";
}

function getItemsByCategory($catalog, $category) {
    $categoryItem = array();
    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $categoryItem[$id] = $item["title"];
        }
    }
    return array_keys($categoryItem);
}

function checkInput($name, $email, $year) {
    $error = new InputErrors();

    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error->setNameInvalid("Name is invalid");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error->setEmailInvalid("Email is invalid!");
    }
    if (!empty($year)) {
        if (!ctype_digit($year)) {
            $error->setYearInvalid("Year must be integer");
        } elseif ($year < date("Y") - 100 OR $year > date("Y")) {
            $error->setYearInvalid("Year is invalid");
        }
    }
    return $error;
}

function standardlizeInput($input) {
//    $input = trim($input);
//    $input = htmlspecialchars($input);
    return $input;
}
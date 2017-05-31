<?php

function getItem($id, $item) {
	return "<li><a href='details.php?id=" . $id . "'>
				<img src='" . $item["img"] . "' 
				alt='" . $item["title"] . "'>
                        <p>View Details</p></a></li>";
}

function getItemsByCategory($catalog, $category) {
	$categoryItems = array();

	foreach ($catalog as $id => $item) {
		if ($category == null OR strtolower($item["category"]) == strtolower($category)) {
			$title                = $item["title"];
			$title                = ltrim($title, "The ");
			$title                = ltrim($title, "A ");
			$title                = ltrim($title, "An ");
			$categoryItems[ $id ] = $title;
		}
	}
	asort($categoryItems);

	return array_keys($categoryItems);
}

?>
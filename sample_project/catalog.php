<?php
$pageHeader = "Full Catalog";
$section    = null;

include "inc/data.php";
include "inc/functions.php";

if (isset($_GET["cat"])) {
	if ($_GET["cat"] == "books") {
		$section    = "Books";
		$pageHeader = "Books";
	} elseif ($_GET["cat"] == "movies") {
		$section    = "Movies";
		$pageHeader = "Movies";
	} elseif ($_GET["cat"] == "music") {
		$section    = "Music";
		$pageHeader = "Music";
	}
}

include "inc/header.php";
?>

<div class="section page catalog">

    <div class="wrapper">

        <h1>
			<?php
			if ($section != null) {
				echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
			}
			echo $pageHeader;
			?>
        </h1>

        <ul class="items">
			<?php
			$categoryItems = getItemsByCategory($catalog, $section);
			foreach ($categoryItems as $id) {
				echo getItem($id, $catalog[ $id ]);
			}
			?>
        </ul>

    </div>

</div>

<?php
include "inc/footer.php";
?>

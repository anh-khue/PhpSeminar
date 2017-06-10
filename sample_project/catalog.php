<?php
include "inc/data.php";
$title = "Full Catalog";
$section = null;
if (isset($_GET["cat"])) {
    $cat = $_GET["cat"];
    if ($cat == "books") {
        $title = "Books";
        $section = "books";
    } else if ($cat == "movies") {
        $title = "Movies";
        $section = "movies";
    } else if ($cat == "music") {
        $title = "Music";
        $section = "music";
    }
}
include "inc/header.php";
include "inc/functions.php";

?>


<div class="section catalog page">
    <h1 class="catalog-title"><?php echo $title; ?></h1>
    <div class="wrapper">

        <a href="catalog.php"><h3>Full Catalog </h3></a>
        <ul class="items">
            <?php
            $categories = getItemsByCategory($catalog, $section);
            foreach ($categories as $id) {
                echo getThumbnail($id, $catalog[$id]);
            } ?>
        </ul>
    </div>
</div>
<?php include_once "inc/footer.php"; ?>

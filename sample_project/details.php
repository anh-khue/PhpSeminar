<?php


include "inc/data.php";

if (isset($_GET["id"])) {
	$id   = $_GET["id"];
	$item = $catalog[ $id ];
}

$pageHeader = $item["title"];

include "inc/header.php";
include "inc/functions.php";
?>

<div class="section page ">

    <div class="wrapper">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="catalog.php">Full Catalog</a>
            /
            <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?>">
				<?php echo $item["category"]; ?>
            </a>
            /
			<?php echo $item["title"]; ?>
        </div>

        <!-- Item Image -->
        <div class="media-picture">
            <span>
                <img src="<?php echo $item["img"]; ?>"
                     alt="<?php echo $item["title"]; ?>"/>
            </span>
        </div>

        <!-- Item Details -->
        <div class="media-details">
            <h1>
				<?php echo $item["title"]; ?>
            </h1>
            <table>
                <tr>
                    <th>
                        Category
                    </th>
                    <td>
						<?php echo $item["category"]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Genre
                    </th>
                    <td>
						<?php echo $item["genre"]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Format
                    </th>
                    <td>
						<?php echo $item["format"]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Year
                    </th>
                    <td>
						<?php echo $item["year"]; ?>
                    </td>
                </tr>
				<?php if ($item["category"] == "Books") : ?>
                    <tr>
                        <th>
                            Authors
                        </th>
                        <td>
							<?php echo implode(", ", $item["authors"]); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Publisher
                        </th>
                        <td>
							<?php echo $item["publisher"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Isbn
                        </th>
                        <td>
							<?php echo $item["isbn"]; ?>
                        </td>
                    </tr>
				<?php elseif ($item["category"] == "Movies") : ?>
                    <tr>
                        <th>
                            Director
                        </th>
                        <td>
							<?php echo $item["director"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Writers
                        </th>
                        <td>
							<?php echo implode(", ", $item["writers"]); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Stars
                        </th>
                        <td>
							<?php echo implode(", ", $item["stars"]); ?>
                        </td>
                    </tr>
				<?php elseif ($item["category"] == "Music") : ?>
                    <tr>
                        <th>
                            Artist
                        </th>
                        <td>
							<?php echo $item["artist"]; ?>
                        </td>
                    </tr>
				<?php endif; ?>
            </table>
        </div>

    </div>

</div>

<?php
include "inc/footer.php";
?>

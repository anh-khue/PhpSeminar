<?php
$pageHeader = "Media Store";

include "inc/header.php";
include "inc/data.php";
include "inc/functions.php";
?>

    <div class="section catalog random">

        <div class="wrapper">

            <h2>May we suggest something?</h2>

            <ul class="items">
				<?php
				$randomArray = array_rand($catalog, 4);
				foreach ($randomArray as $id) {
					echo getItem($id, $catalog[ $id ]);
				}
				?>
            </ul>

        </div>

    </div>

<?php
include "inc/footer.php";
?>
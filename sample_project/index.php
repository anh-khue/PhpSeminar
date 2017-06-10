<?php
$title="Media Library";
$section=null;
include_once "inc/header.php";
include_once "inc/data.php";
include_once "inc/functions.php";
?>
    <div class="section catalog random">
        <h1 class="catalog-title">May we suggest something ?</h1>
        <div class="wrapper">
            <ul class="items">
                <?php
                $random=array_rand($catalog,8);
                foreach ($random as $id){
                    echo getThumbnail($id,$catalog[$id]);
                }
                ?>
            </ul>
        </div>

    </div>
</div>

<!---FOOTER--->
<?php include_once "inc/footer.php";?>
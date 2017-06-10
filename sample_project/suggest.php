<?php
include "inc/functions.php";
require "inc/error/InputErrors.php";

$error = new InputErrors();
$name = $email = $category = $title = $year = $details = $check = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = standardlizeInput($_POST["name"]);
    $email = standardlizeInput($_POST["email"]);
    $category = standardlizeInput($_POST["category"]);
    $title = standardlizeInput($_POST["title"]);
    $year = standardlizeInput($_POST["year"]);
    $details = standardlizeInput($_POST["details"]);
    $check = standardlizeInput($_POST["check"]);

    $error = checkInput($name, $email, $year);
}
if ($check == "Checked" && $error->checkNoError()) {
    header("location:suggest.php?status=thanks");
}

$title = "Suggest a Media Item";
$section = "suggest";
include "inc/header.php";
?>
    <h1 class="catalog-title">Suggest a Media Item</h1>
    <div class="section page">
        <div class="wrapper">
            <?php
            if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
                echo "<p>Thanhk for your suggestion! I'll check out shortly!</p>";
            } else {
                if ($error->checkNoError()) {
                    ?>
                    <p>
                        If you think there is something i'm missing, let me know! Complete the form to send me an email.
                    </p>
                    <?php
                }
                ?>
                <form action="suggest.php" method="post">
                    <table>
                        <!-- Name -->
                        <tr>
                            <th>
                                <label for="name">
                                    Name
                                    <span style="color: red;">
                                    *
                                </span>
                                </label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" required
                                       value="<?php if (isset($_POST["name"])) {
                                           echo $name;
                                       } ?>">
                            </td>
                        </tr>
                        <!-- Name error -->
                        <?php
                        if (!empty($error->getNameInvalid())) {
                            ?>
                            <tr>
                                <th></th>
                                <td>
                                            <span class="required">
                                                <?php
                                                echo $error->getNameInvalid();
                                                ?>
                                            </span>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <!-- Email -->
                        <tr>
                            <th>
                                <label for="email">
                                    Email
                                    <span style="color: red;">
                                    *
                                        </span>
                                </label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php if (isset($_POST["email"])) {
                                    echo $email;
                                } ?>">
                            </td>
                        </tr>
                        <!-- Email error -->
                        <?php
                        if (!empty($error->getEmailInvalid())) {
                            ?>
                            <tr>
                                <th></th>
                                <td>
                                            <span class="required">
                                                <?php
                                                echo $error->getEmailInvalid();
                                                ?>
                                            </span>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <!-- Category -->
                        <tr>
                            <th>
                                <label for="category">
                                    Category
                                    <span style="color: red;">
                                    *
                                </span>
                                </label>
                            </th>
                            <td>
                                <select name="category" id="category" required>
                                    <option value="" disabled selected>
                                        Select one
                                    </option>
                                    <option value="Books">
                                        Books
                                    </option>
                                    <option value="Movies">
                                        Movies
                                    </option>
                                    <option value="Music">
                                        Music
                                    </option>
                                </select>
                            </td>
                        </tr>

                        <!-- Title -->
                        <tr>
                            <th>
                                <label for="title">
                                    Title
                                    <span style="color: red;">
                                    *
                                </span>
                                </label>
                            </th>
                            <td>
                                <input type="text" name="title" id="title" required
                                       value="<?php if (isset($_POST["title"])) {
                                           echo $title;
                                       } ?>">
                            </td>
                        </tr>

                        <!-- Year -->
                        <tr>
                            <th>
                                <label for="year">
                                    Year

                                </label>
                            </th>
                            <td>
                                <input type="text" name="year" id="year" value="<?php if (isset($_POST["year"])) {
                                    echo $year;
                                } ?>">
                            </td>
                        </tr>
                        <!-- Year invalid -->
                        <?php
                        if (!empty($error->getYearInvalid())) {
                            ?>
                            <tr>
                                <th></th>
                                <td>
                                            <span class="required">
                                                <?php
                                                echo $error->getYearInvalid();
                                                ?>
                                            </span>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <!-- Detail -->
                        <tr>
                            <th>
                                <label for="details">
                                    Suggest Items Details
                                </label>
                            </th>
                            <td>
                            <textarea name="details" id="details"><?php if (isset($_POST["details"])) {
                                    echo $details;
                                } ?></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="check" value="Checked">
                    <input type="submit" value="Send">
                </form>
                <?php
            }
            ?>

        </div>
    </div>

<?php include("inc/footer.php"); ?>
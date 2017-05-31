<?php
include "inc/data.php";
include "inc/functions.php";

$pageHeader = "Suggest a Media Item";
$section    = "suggest";
include "inc/header.php";
?>

<div class="section page">

    <div class="wrapper">

        <h1>
			<?php
			echo $pageHeader;
			?>
        </h1>

        <p>
            If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.
        </p>

        <form action="suggest.php" method="post">
            <table>
                <!-- Name -->
                <tr>
                    <th>
                        <label for="name">
                            Name <span class="required">*</span>
                        </label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name"
                               required>
                    </td>
                </tr>
                <!-- Email -->
                <tr>
                    <th>
                        <label for="email">
                            Email <span class="required">*</span>
                        </label>
                    </th>
                    <td>
                        <input type="email" name="email" id="email"
                               required>
                    </td>
                </tr>
                <!-- Category -->
                <tr>
                    <th>
                        <label for="category">
                            Category <span class="required">*</span>
                        </label>
                    </th>
                    <td>
                        <select name="category" id="category"
                                required>
                            <option value="" disabled>-- Select one --</option>
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
                            Title <span class="required">*</span>
                        </label>
                    </th>
                    <td>
                        <input type="text" name="title" id="title"
                               required>
                    </td>
                </tr>
                <!-- Year -->
                <tr>
                    <th>
                        <label for="year">
                            Year <span class="required">*</span>
                        </label>
                    </th>
                    <td>
                        <input type="text" name="year" id="year"
                               required>
                    </td>
                </tr>
                <!-- Details -->
                <tr>
                    <th>
                        <label for="details">
                            Details
                        </label>
                    </th>
                    <td>
                        <textarea name="details" id="details"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Send">
        </form>

    </div>

</div>

<?php
include "inc/footer.php";
?>

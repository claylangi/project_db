<?php
// Check If form submitted, insert form data into student table.
if (isset($_POST['Submit'])) {
    $rating_id = $_POST['rating_id'];
    $value = $_POST['value'];

    // include database connection file
    include_once("config.php");

    // Insert student data into table
    $result = mysqli_query ($conn, "INSERT INTO Ratings (rating_id, value)
    VALUES ('$rating_id', '$value')");

    // Show message when student added
    echo "Rating added successfully. <a href= 'index.php'> View Ratings</a><br><br>";
}
?>

<html>
    <head>
        <title>Add Rating</title>
    </head>
    <body>
        <a href="index.php">Go to Home </a>
        <br/><br/>
    
        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Rating ID</td>
                    <td><input type="text" name="rating_id"> </td>
                </tr>
                <tr>
                    <td>Value</td>
                    <td><input type="text" name="value"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" Value="Add"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>

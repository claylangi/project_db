<?php
// Check If form submitted, insert form data into genre table.
if (isset($_POST['Submit'])) {
    $genre_id = $_POST ['genre_id'];
    $name = $_POST ['name'];

    // include database connection file
    include_once("config.php");

    // Insert genre data into table
    $result = mysqli_query ($conn, "INSERT INTO genre (genre_id,genre_name) VALUES ('$genre_id','$name')");

    // Show message when genre added
    echo "Genre added succesfully. <a href= 'index.php'> View Genre</a><br><br>";
}
?>

<html>
    <head>
        <title>Add Genre</title>
    </head>
    <body>
        <a href="index.php">Go to Home </a>
        <br/><br/>
    
        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Genre ID</td>
                    <td><input type="text" name="genre_id"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" Value="Add"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>

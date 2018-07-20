<!DOCTYPE HTML>
<html lang="en">
    <body>
        <h1>Currently available Templates</h1>
        <p>Please enter some irrelevant crap here!</p>

         <?php
                    // Get a connection for the database
                    require_once('./mysqliConnect.php');

                    // Create a query for the database
                    $query = "SELECT tempname, font, color, artist FROM Temp";

                    // Get a response from the database by sending the connection
                    // and the query
                    $response = @mysqli_query($dbc, $query);

                    // If the query executed properly proceed

                    if($response){
                    echo '<table align="left"
                    cellspacing="5" cellpadding="8">

                    <tr><td align="left"><b>Template Name</b></td>
                    <td align="left"><b>Font</b></td>
                    <td align="left"><b>Color</b></td>
                    <td align="left"><b>Artist</b></td></tr>';

                    // mysqli_fetch_array will return a row of data from the query
                    // until no further data is available
                    while($row = mysqli_fetch_array($response)){

                    echo '<tr><td align="left">' . 
                    $row['tempname'] . '</td><td align="left">' . 
                    $row['font'] . '</td><td align="left">' .
                    $row['color'] . '</td><td align="left">' . 
                    $row['artist'] . '</td><td align="left"></tr>';
                    }

                    echo '</table>';

                    } else {

                    echo "Couldn't issue database query<br />";

                    echo mysqli_error($dbc);

                    }

                    // Close connection to the database
                    mysqli_close($dbc);

                    ?>
                   
    </body>
</html>
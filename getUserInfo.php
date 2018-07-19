
<!DOCTYPE HTML>
<html lang="en">
    <body>
        <h1>Currently available users</h1>
        <p>Please enter some irrelevant crap here!</p>

         <?php
                    // Get a connection for the database
                    require_once('./mysqliConnect.php');

                    // Create a query for the database
                    $query = "SELECT firstname, lastname, email, password FROM User";

                    // Get a response from the database by sending the connection
                    // and the query
                    $response = @mysqli_query($dbc, $query);

                    // If the query executed properly proceed

                    if($response){
                    echo '<table align="left"
                    cellspacing="5" cellpadding="8">

                    <tr><td align="left"><b>First Name</b></td>
                    <td align="left"><b>Last Name</b></td>
                    <td align="left"><b>Email</b></td>
                    <td align="left"><b>Password</b></td></tr>';

                    // mysqli_fetch_array will return a row of data from the query
                    // until no further data is available
                    while($row = mysqli_fetch_array($response)){

                    echo '<tr><td align="left">' . 
                    $row['firstname'] . '</td><td align="left">' . 
                    $row['lastname'] . '</td><td align="left">' .
                    $row['email'] . '</td><td align="left">' . 
                    $row['password'] . '</td><td align="left"></tr>';
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
<!DOCTYPE HTML>
<html lang="en">
    <body>
        
    <?php session_start();
      if(isset($_SESSION['email'])) echo $_SESSION['test'];
      else echo 'session problem';
    ?>

        <table>
            <tr>
                <td>View your resume build</td>
                <td><input type="submit" value="View Resumes"></td>
            </tr>

            <tr>
                <td>Build a new resume</td>
                <td><input type="submit" value="Build Resume"></td>
            </tr>

            <tr>
                <td>View all available templates</td>
                <td><a href="./getTempInfo.php"><input type="submit" value="View Templates"></a></td>
            </tr>

            <tr>
                <td>Update your skills</td>
                <td><input type="submit" value="Update skill"></td>
            </tr>

            <tr>
                <td>Update your Work Experience</td>
                <td><input type="submit" value="Update Work"></td>
            </tr>

            <tr>
                <td>Update your Project information</td>
                <td><input type="submit" value="Update Project"></td>
            </tr>

            <tr>
                <td>Get users</td>
                <td><a href="./getUserInfo.php"><input type="submit" value="Get USERS"></a></td>
            </tr>
        </table>

    </body>
</html>
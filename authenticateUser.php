<html lang="en">
    <body>
        <?php
                if(isset($_POST['submit'])){
                    $emptySet= array();

                    if(empty($_POST['email'])){
                        $emptySet[]= 'Email';
                    }else{
                        $email= trim($_POST['email']);
                    }

                    if(empty($_POST['password'])){
                        $emptySet[]= 'Password';
                    }else{
                        $password= trim($_POST['password']);
                    }

                    if(empty($emptySet)){
                        require_once('./mysqliConnect.php');

                        $query= "SELECT firstname, lastname, email, password, userid
                                FROM User 
                                WHERE email='$email' and password='$password'";

                        $result = mysqli_query($dbc, $query);

                        if(mysqli_num_rows($result) == 1){
                            session_start();
                            $_SESSION['email'] = 'This thing';

                            readfile('./profilepage.php');

                        }else{
                            echo "<h1>Sorry, your credentials do not seem to on our system!<br> Please retry, or Sign Up</h1>";
                            echo 
                            "<form action='./authenticateUser.php' method='post'>
                            Email:   <input type='text' name='email'><br>
                            Password:   <input type='password' name='password'><br>
                            <input type='submit' name = 'submit' value='Log In!'>
                            </form>
            
                            <a href='./signUppage.html'><input type='submit' value='Sign Up'></a>";
                        }

                    }else{
                        echo 'Your missing the following <br />';
                        foreach($emptySet as $set){
                            echo "$set <br />";
                        }

                        echo "<br />";
                    }

                }
        ?>


        
        
    </body>
</html>
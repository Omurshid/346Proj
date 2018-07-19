
<html lang="en">
    <body>
        <h1>Welcome to ResumeBuilder</h1>
        <p>Welcome to signup page</p>
        <?php
                if(isset($_POST['submit'])){
                    $emptySet= array();


                    if(empty($_POST['fname'])){
                        $emptySet[]= 'First Name';
                    }else{
                        $fname= trim($_POST['fname']);
                    }

                    if(empty($_POST['lname'])){
                        $emptySet[]= 'Last Name';
                    }else{
                        $lname= trim($_POST['lname']);
                    }

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
                        $query= "INSERT INTO User(email,firstname,lastname,password) VALUES (?,?,?,?)";
                        $Statement= mysqli_prepare($dbc, $query);
                        mysqli_stmt_bind_param($Statement,"ssss", $email, $fname, $lname,$password);
                        mysqli_stmt_execute($Statement);
                        $affected_rows= mysqli_stmt_affected_rows($Statement);

                        if($affected_rows==1){
                            echo 'User Added <br />';
                            mysqli_stmt_close($Statement);
                            mysqli_close($dbc);
                        }else{
                            echo 'Please enter another email! That one is taken <br />';
                            echo mysqli_error();

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


        <form action="./addUser.php" method="post">
                First Name: <input type="text" name="fname"><br>
                Last Name:  <input type="text" name="lname"><br>
                Email:   <input type="text" name="email"><br>
                Password:   <input type="password" name="password"><br>
                <input type="submit" name = "submit" value="Go!">
        </form>
        
    </body>
</html>

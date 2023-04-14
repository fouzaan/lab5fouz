<?php
/**
 * this is a web page where we will signup.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed <fouzaan.shaiknissar@dcmail.ca>
 * @version 1.0 (month, day, year)
 */
$title = "User Registration";
$file = "lab10.php";
$description = "This is a web page where we will signup. and we will verify if the user is already registered or not and then we redirect to the lab9 page where we will login. we are using many new functions and methids like ob_start() and ob_flush() we are also using header() thing to re-direct to the lab 9";
$date = "2023/Apr/10 ";
$banner = "Database/PHP Lab - User Registration";
include("./header.php");
$id = "";
$password = "";
$pass_confirm = "";
$fname = "";
$lname = "";
$email = "";
$error = "";
$output = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = trim($_POST['user_id']);
    $password = trim($_POST['passwd']);
    $pass_confirm = trim($_POST['conf_passwd']);
    $fname = trim($_POST['first_name']);
    $lname = trim($_POST['last_name']);
    $email = trim($_POST['email_address']);

    // input validation


    if (strlen($id) < MINIMUM_ID_LENGTH) {
        $error .= "Please enter a valid ID. which length is grater than 5<br/>";
        $id = "";

    } elseif (strlen($id) > MAXIMUM_ID_LENGTH) {
        $error .= "Please enter a valid ID. which length is less than 20<br/>";
        $id = "";

    } elseif (strlen($id) == 0) {
        $error .= "id can not be empty <br/>";
        $id = "";

    } else {
        $sql = "SELECT * FROM users WHERE id = '" . $id . "'";
        $results = pg_query($conn, $sql);
        if (!pg_num_rows($results)) {
            $error .= "id already exists<br/>";
            $id = "";

        } else {
            $error = "";
        }
    }

    if ($fname == "") {
        $error .= "Please enter a valid first name. it can not be empty<br/>";
        $fname = "";

    } elseif (is_numeric($fname) == true) {
        $error .= "Please enter a valid first name. it can not be a number<br/>";
        $fname = "";

    } elseif (strlen($fname) >= MAX_FIRST_NAME_LENGTH) {
        $error .= "Please enter a valid first name. it can more than 20 charectors<br/>";
        $fname = "";

    }

    if ($lname == "") {
        $error .= "Please enter a valid last name. it can not be empty<br/>";
        $lname = "";

    } elseif (is_numeric($lname) == true) {
        $error .= "Please enter a valid first name. it can not be a number<br/>";
        $lname = "";

    } elseif (strlen($lname) >= MAX_LAST_NAME_LENGTH) {
        $error .= "Please enter a valid last name. it can more than 20 charectors<br/>";
        $lname = "";

    }


    if (strlen($password) < MINIMUM_PASSWORD_LENGTH) {
        $error .= "Please enter a valid password. which length is grater than 6<br/>";
        $password = "";

    } elseif (strlen($pass_confirm) < MINIMUM_PASSWORD_LENGTH) {
        $error .= "Please enter a valid confirm password. which is grater than 6<br/>";
        $pass_confirm = "";

    } elseif (strlen($password) > MAXIMUM_PASSWORD_LENGTH) {
        $error .= "Please enter a valid password. which length is smaller than 15<br/>";
        $password = "";

    } elseif (strlen($pass_confirm) > MAXIMUM_PASSWORD_LENGTH) {
        $error .= "Please enter a valid confirm password. which length is smaller than 15<br/>";
        $pass_confirm = "";

    } elseif ($password != $pass_confirm) {
        $error .= " Password and confirm password should be same<br/>";
        $password = "";
        $pass_confirm = "";

    } elseif (strlen($password) == 0) {
        $error .= "Password should not be empty<br/>";
        $password = "";

    } elseif (strlen($pass_confirm) == 0) {
        $error .= "confirm Password should not be empty <br/>";
        $pass_confirm = "";
    }

    //email validation

    if (strlen($email) == 0) {
        //use strlen() to det. whether the var empty or not
        $error .= "You must enter an email address";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //note the ! not symbol, if valid no problem
        $error .= "<em>" . $email . "</em> is not a valid email address";
        //NOTE: give the invalid address so user knows what they entered
        $email = ""; //empty out the variable so it is not sticky
    } elseif (strlen($email) >= MAXIMUM_EMAIL_LENGTH) {
        $error .= "<em>" . $email . "</em> email address should be less than 255 charectores.";
        //NOTE: give the invalid address so user knows what they entered
        $email = ""; //empty out the variable so it is not sticky
    }


    if ($error == "") {
        $today = date("Y-m-d", time());
        $sql = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES ('" . $id . "', '" . $password . "', '" . $pass_confirm . "', '" . $fname . "', '" . $email . "', '" . $today . "', '" . $today . "')";
        $ok = pg_query($conn, $sql);
        if (!pg_num_rows($ok)) {
            header("Location: ./lab9.php");
            ob_flush();
        } else {
            $error .= "Error: Please try again";
        }
        $id = "" . $id . "";
        $password = "";
    }

}
?>
<div>
    <hr />
    <?php echo "<b>" . $error . "</b><br/>" ?>
    <?php echo "<b>" . $output . "</b><br/>" ?>
    <hr />
    <h2>Please register in our system</h2>
    <p>Please enter your personal information<br /></p>
</div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <table border="0" cellpadding="10">
        <tr>
            <td><strong>Login ID</strong></td>
            <td><input type="text" name="user_id" value="<?php echo htmlspecialchars($id); ?>" size="20" /></td>
        </tr>
        <tr>
            <td><strong>Password</strong></td>
            <td><input type="password" name="passwd" value="<?php echo htmlspecialchars($password); ?>" size="20" />
            </td>
        </tr>
        <tr>
            <td><strong>Confirm Password</strong></td>
            <td><input type="password" name="conf_passwd" value="<?php echo htmlspecialchars($pass_confirm); ?>"
                    size="20" /></td>
        </tr>
        <tr>
            <td><strong>First Name</strong></td>
            <td><input type="text" name="first_name" value="<?php echo htmlspecialchars($fname); ?>" size="20" /></td>
        </tr>
        <tr>
            <td><strong>Last Name</strong></td>
            <td><input type="text" name="last_name" value="<?php echo htmlspecialchars($lname); ?>" size="20" /></td>
        </tr>
        <tr>
            <td><strong>Email Address</strong></td>
            <td><input type="text" name="email_address" value="<?php echo htmlspecialchars($email); ?>" size="20" />
            </td>
        </tr>

    </table>
    <table border="0" cellspacing="15">
        <tr>
            <td><input type="submit" value="Register" /></td>
            <td><input type="reset" value="Clear" /></td>
        </tr>
    </table>
</form>
<hr />
<?php
include("./footer.php");
?>
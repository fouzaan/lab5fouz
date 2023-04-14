<?php
/**
 * this file is a moch up of a login page.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed <fouzaan.shaiknissar@dcmail.ca>
 * @version 1.0 (month, day, year)
 */
$title = "PHP Lab - User Login";
$file = "lab9.php";
$description = "this file is a moch up of a login page. It recives data and displays them using the PostgressSQL.";
$date = "2023/Apr/03 ";
$banner = "Database/PHP Lab - User Login";
include("./header.php");
$error = "";
$output = "";
$id = "";
$password = "";
// the main logic which is responsible for loading the information of the user and its validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = trim($_POST['login']);
    $password = trim($_POST['pass']);
    // input validation

    if ($id == "") {
        $error .= "The login must not be empty<br/>";
    } elseif ($password == "") {
        $error .= "The password must not be empty<br/>";
    }
    $conn = db_connect();
    $sql = "SELECT first_name, last_name, email_address, last_access FROM users WHERE id = '" . $id . "' AND password= '" . $password . "'";
    $results = pg_query($conn, $sql);
    if (pg_num_rows($results)) {
        $fname = pg_fetch_result($results, 0, 'first_name');
        $lname = pg_fetch_result($results, 0, 'last_name');
        $email_address = pg_fetch_result($results, 0, 'email_address');
        $last_acess = pg_fetch_result($results, 0, 'last_access');
        $output .= "Welcome back " . $fname . " " . $lname . "<br/> Our records show that your<br/>email address is: " . $email_address . "  <br/>and you last accessed our system: " . $last_acess . "<br/>Please log in<br/>";
        $sql = "UPDATE users SET last_access = '" . date("Y-m-d", time()) . "' WHERE id = '" . $id . "'";
        $results = pg_query($conn, $sql);
        $id = "" . $id . "";
        $password = "";
    } else {
        $sql = "SELECT * FROM users WHERE id = '" . $id . "'";
        $results = pg_query($conn, $sql);
        if (!pg_num_rows($results)) {
            $error .= "Please enter a valid email address<br/>";
            $id = "";
        } else {
            $error .= "Please enter a valid password<br/>";
            $password = "";
        }
    }

}
?>
<div>
    <br />
    <h3>
        <?php echo $title; ?>
    </h3>
    <p>
        this file is a moch up of a login page. It recives data and displays them using the PostgressSQL. We are
        importing many crucial fuctions from a separate file. We are also running multiple quesries which includes
        update etc.
    </p><br />
    <hr />
    <?php echo "<b>" . $error . "</b><br/>" ?>
    <?php echo "<b>" . $output . "</b><br/>" ?>

    <h2>Please log in</h2>
    <p>Enter your login ID and password to connect to this system<br />
    </p>
</div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <table border="0" cellpadding="10">
        <tr>
            <td><strong>Login ID</strong></td>
            <td><input type="text" name="login" value="<?php echo htmlspecialchars($id); ?>" size="20" /></td>
        </tr>
        <tr>
            <td><strong>Password</strong></td>
            <td><input type="password" name="pass" value="<?php echo htmlspecialchars($password); ?>" size="20" /></td>
        </tr>
    </table>
    <table border="0" cellspacing="15">
        <tr>
            <td><input type="submit" value="Log In" /></td>

            <td><input type="reset" value="Reset" /></td>
        </tr>
    </table>
</form>
<div>

    <p>
        Please wait after pressing <strong>Log in</strong>
        while we retrieve your records from our database.<br />
        <em>(This may take a few moments)</em>
    </p>
    <a href="./sql/lab9_users.sql">users_sql file</a>
    <hr />
</div>
<?php
include("./footer.php");
?>
<!--
Using regular expressions check for the validity of entered email-id.                          
1. The @ symbol should not appear more than once. 
2. The dot (.) can appear at the most once before @ and at the most twice or at least once 
after @ symbol. 
3. The substring before @ should not begin with a digit or underscore or dot or @ or any 
other special character. (Use explode and preg_match function.) 
-->
<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation</h2>

<form method="post">
    <input type="text" name="email" placeholder="Enter your email" required>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if(substr_count($email, "@") != 1){
        echo "<p style='color:red;'>Invalid: '@' should appear exactly once.</p>";
    } else {
        list($username, $domain) = explode("@", $email);

        $dotBefore = substr_count($username, ".");
        $dotAfter = substr_count($domain, ".");

        if($dotBefore > 1){
            echo "<p style='color:red;'>Invalid: Dot appears more than once before '@'.</p>";
        } elseif($dotAfter < 1 || $dotAfter > 2){
            echo "<p style='color:red;'>Invalid: Dot should appear at least once and at most twice after '@'.</p>";
        } elseif(!preg_match("/^[A-Za-z]/", $username)){
            echo "<p style='color:red;'>Invalid: Username must start with a letter.</p>";
        }
        else{
            echo "<p style='color:green;'>Valid Email</p>";
        }
    }
}
?>

</body>
</html>

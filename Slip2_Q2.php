<!--
Write a PHP script to accept 2 strings from the user, the first string should be a sentence and 
second can be a word.
1. Delete a small part from first string after accepting position and number of characters to remove.
2. Insert the given small string in the given big string at specified position without removing any characters from the big string.
3. Replace some characters/words from given big string with the given small string at specified position.
4. Replace all the characters from the big string with the small string after a specified position.
(Use substr_replace() function)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>
    <form method="post">
        <input type="text" name="str1" placeholder="Enter a sentence"><br><br>
        <input type="text" name="str2" placeholder="Enter a word"><br><br>
        <input type="number" name="pos" placeholder="Enter position"><br><br>
        <input type="number" name="len" placeholder="Enter number of characters"><br><br>
        <select name="operation">
            <option value="delete">Delete</option>
            <option value="insert">Insert</option>
            <option value="replace">Replace Part</option>
            <option value="replace_after">Replace After</option>
        </select><br><br>
        <input type="submit" name="submit" value="Perform Operation">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $pos = $_POST['pos'];
        $len = $_POST['len'];
        $op = $_POST['operation'];

        echo "<h3>Original String: $str1</h3>";

        switch($op){
            case "delete":
                $result = substr_replace($str1, "", $pos, $len);
                echo "<h3>After Deletion: $result</h3>";
                break;

            case "insert":
                $result = substr_replace($str1, $str2, $pos, 0);
                echo "<h3>After Insertion: $result</h3>";
                break;

            case "replace":
                $result = substr_replace($str1, $str2, $pos, $len);
                echo "<h3>After Replace: $result</h3>";
                break;

            case "replace_after":
                $result = substr_replace($str1, $str2, $pos);
                echo "<h3>After Replace After: $result</h3>";
                break;

            default:
                echo "<h3>Invalid Choice</h3>";
        }
    }
    ?>
</body>
</html>

<!--
.Write a menu driven program to perform the following operations on associative arrays: 
1. Split an array into chunks 
2. Sort the array by values without changing the keys. 
3. Filter the odd elements from an array. 
4. Merge the given arrays. 
5. Find the intersection of two arrays. 
6. Find the union of two arrays. 
7. Find set difference of two arrays.   
-->

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <h2>Associative Array Operations</h2>
    <form method="post">
        <select name="operation">
            <option value="1">Split array into chunks</option>
            <option value="2">Sort array by values (preserve keys)</option>
            <option value="3">Filter odd elements</option>
            <option value="4">Merge arrays</option>
            <option value="5">Intersection of arrays</option>
            <option value="6">Union of arrays</option>
            <option value="7">Set difference of arrays</option>
        </select>
        <input type="number" name="chunk" placeholder="Chunk size (for op 1)">
        <input type="submit" name="submit" value="Perform Operation">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $array1 = ["a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5];
        $array2 = ["b"=>2, "c"=>4, "f"=>6, "g"=>7];

        $operation = $_POST['operation'];

        echo "<h3>Result:</h3>";

        switch($operation) {
            case 1:
                $size = isset($_POST['chunk']) ? (int)$_POST['chunk'] : 2;
                $chunks = array_chunk($array1, $size, true);
                echo "<pre>"; print_r($chunks); echo "</pre>";
                break;

            case 2:
                $sorted = $array1;
                asort($sorted);
                echo "<pre>"; print_r($sorted); echo "</pre>";
                break;

            case 3:
                $filtered = array_filter($array1, fn($val) => $val % 2 != 0);
                echo "<pre>"; print_r($filtered); echo "</pre>";
                break;

            case 4:
                $merged = array_merge($array1, $array2);
                echo "<pre>"; print_r($merged); echo "</pre>";
                break;

            case 5:
                $intersection = array_intersect($array1, $array2);
                echo "<pre>"; print_r($intersection); echo "</pre>";
                break;

            case 6:
                $union = $array1 + $array2;
                echo "<pre>"; print_r($union); echo "</pre>";
                break;

            case 7:
                $diff = array_diff($array1, $array2);
                echo "<pre>"; print_r($diff); echo "</pre>";
                break;

            default:
                echo "Invalid operation!";
        }
    }
    ?>
</body>
</html>

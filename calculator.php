<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Calculator</title>
    </head>
    <body>
        <form>
        <h1>PHP Calculator</h1>
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Divide</option>
            <option>Multiply</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<p> Product: 
<?php
    if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch ($operator) {
                case "None":
                    echo "you must select a method";
                    break;
                case "Add":
                    echo $result1 + $result2;
                    break;
                case "Subtract":
                    echo $result1 - $result2;
                    break;    
                case "Divide":
                    echo $result1 / $result2;
                    break;
                case "Multiply":
                    echo $result1 * $result2;
                    break;
            }
    } 
?>
    </body>
</html>
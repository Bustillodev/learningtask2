<html>
    <head>
        <title>Activity 04</title>
        <style>
                .btn
                {
                    background-color: blue;
                    color: white;
                }
                .btn:hover
                {
                    background-color:white;
                    color:blue;
                }
        </style>
    </head>
    <body>
        <?php

        if (isset($_POST["btnSubmit"])) {
            $num1 = $_POST["txtFirstNumber"];
            $num2 = $_POST["txtSecondNumber"];
            $operator = $_POST["Operator"];
            $result = 0;
            $operationName = "";

            if ($operator == "+") {
                $result = $num1 + $num2;
                $operationName = "+";
            } else if ($operator == "-") {
                $result = $num1 - $num2;
                $operationName = "-";
            } else if ($operator == "*") {
                $result = $num1 * $num2;
                $operationName = "*";
            } else if ($operator == "/") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Undefined (Cannot divide by zero)";
                }
                $operationName = "/";
            }
            echo "<h2>Calculation Result:</h2>";
            echo "Operation: <strong>" . $operationName . "</strong><br>";
            echo "First Number: <strong>" . $num1 . "</strong><br>";
            echo "Second Number: <strong>" . $num2 . "</strong><br><br>";
            echo "Result: <strong>" . $result . "</strong><br><br>";
            echo "<a href='Activity_04.php'>Back</a>";

        } else {
        ?>
            <form method="post" action="Activity_04.php">
                <label> First Number </label><br>
                <input type="text" class="form-control" name="txtFirstNumber" placeholder="First Number..."><br>
                <label>Operator</label><br>
                <select name="Operator">
                    <option value="Option">Option</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select><br>
                <label> Second Number </label><br>
                <input type="text" class="form-control" name="txtSecondNumber" placeholder="Second Number..."><br>         
                <input class="btn" type="submit" name="btnSubmit" value="Submit" />
                <input class="btn" type="reset" value="Clear"/>
            </form>
        <?php } ?>
    </body>
</html>
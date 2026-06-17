<html>
        <head>
            <Title> Activity_02</Title>
        </head>
        <body>
            <?php
            if (isset($_POST["btnSubmit"])) {
                echo "The Name You Entered is <strong>".$_POST["txtName"]."</strong><br>";
                echo "<a href='Activity_02.php'>Back</a>";
                } else {
            ?>
            <Form method="post" action="Activity_02.php">
            <label> Name </label><br>
            <input type="text" name="txtName" id="txtName" placeholder="name...">
            <input type="submit" name="btnSubmit" value="Submit" />
            </form>
            <?php } ?>
                
        </body>
</html>

<html>
        <head>
            <Title> Activity_03</Title>
            <style type="text/css"?>
                .form-control
                {
                    font-family:verdana;
                }
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
            <Form method="post" action="Activity_03_reciever.php">
            <label> First Name </label><br>
            <input type="text" class="form-control" name="txtFirstName" placeholder="First Name..."><br>
            <label> Last Name </label><br>
            <input type="text" class="form-control" name="txtLastName" placeholder="Last Name..."><br>
            <label>Status </label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br>
            <label>DOB</label><br>
            <input type="text" class="form-control" name="txtDOB" placeholder="DOB..."><br>
            <label>Address</labe><br>
            <textarea rows="10" class="form-control"
                    cols="25" name="txtAreaAddress" placeholder="Address..."></textarea><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit" /> 
            <input class="btn" type="reset" value="Clear"/>
            </form>               
        </body>
</html>

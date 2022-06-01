<html>
    <head>
            <title>
                my page
            </title>
    </head>

    <body>

        <h1>Registration Form</h1>

        <form action="../control/p1.php" method="GET">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type = "text" name = "fname"></td>
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input type = "text" name = "lname"></td>
                </tr>

                <tr>
                    <td>Age:</td>
                    <td><input type = "number" name = "age"></td>
                </tr>

                <tr>
                    <td>Designation:</td>
                    <td><input type = "radio" name = "desig" value = "Junior Programmer">Junior Programmer
                    <input type = "radio" name = "desig" value = "Senior Programmer">Senior Programmer
                    <input type = "radio" name = "desig" value = "Project Lead">Project Lead</td>
                </tr>

                <tr>
                    <td>Preferred Language:</td>
                    <td><input type = "checkbox" name = "l1" value = "JAVA">JAVA
                    <input type = "checkbox" name = "l2" value = "PHP">PHP
                    <input type = "checkbox" name = "l3" value = "C++">C++</td>
                </tr>

                <tr>
                    <td>E-mail:</td>
                    <td><input type="email" name = "email"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "password"></td>
                </tr>
               
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file" name = "file"></td>
                </tr>

                <tr>
                    <td><input type = "submit">
                    <input type="reset"></td>
                </tr>

            </table>
        </form>
    </body>

</html>
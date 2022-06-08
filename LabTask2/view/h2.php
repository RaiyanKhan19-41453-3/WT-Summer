<?php
include("../control/p2.php");
?>

<html>
    <head>
            <title>
                my page
            </title>
    </head>

    <body>

        <h1>Registration Form</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type = "text" name = "fname"></td>
                    <td><?php
                        echo $uvalid;
                    ?></td>
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input type = "text" name = "lname">
                </td>
                </tr>

                <tr>
                    <td>Age:</td>
                    <td><input type = "number" name = "age"></td>
                    <td>
                    <?php
                        echo $agevalid;
                    ?></td>
                </tr>

                <tr>
                    <td>Designation:</td>
                    <td><input type = "radio" name = "desig" value = "Junior Programmer">Junior Programmer
                    <input type = "radio" name = "desig" value = "Senior Programmer">Senior Programmer
                    <input type = "radio" name = "desig" value = "Project Lead">Project Lead</td>
                    <td>
                    <?php
                        echo $desigvalid;
                    ?></td>
                </tr>

                <tr>
                    <td>Preferred Language:</td>
                    <td><input type = "checkbox" name = "l1" value = "JAVA">JAVA
                    <input type = "checkbox" name = "l2" value = "PHP">PHP
                    <input type = "checkbox" name = "l3" value = "C++">C++</td>
                    <td>
                    <?php
                        echo $langvalid;
                        echo $langvalid1;
                        echo $langvalid2;
                        echo $langvalid3;
                    ?></td>
                </tr>

                <tr>
                    <td>E-mail:</td>
                    <td><input type="email" name = "email"></td>
                    <td>
                    <?php
                        echo $evalid;
                    ?></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "password"></td>
                    <td>
                    <?php
                        echo $pvalid;
                    ?></td>
                </tr>
               
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file" name="filetoupload">
                </td>
                <td>
                    <?php
                        echo $file_name;
                    ?></td>
                </tr>

                <tr>
                    <td><input type = "submit" name = "sub">
                    <input type="reset"></td>
                    <td>
                    <?php
                        echo $dvalid;
                    ?></td>
                </tr>

            </table>
        </form>
    </body>

</html>
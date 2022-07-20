<?php
    class db
    {
        function openCon()
        {
            $dbservername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "labtask";
            $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
            if($conn->connect_error)
            {
                echo "Unable to create Object";
            }
            return $conn;
        }

        function insertUser($tablename, $fname, $lname, $age, $designation, $planguage, $email, $password, $picture, $conn)
        {
            $sqlstr = "insert into $tablename (fname, lname, age, designation, planguage, email, password, picture) values('$fname', '$lname', '$age', '$designation', '$planguage', '$email', '$password', '$picture')";

            if($conn->query($sqlstr))
            {
                echo "Data Inserted";
            }
            else
            {
                echo $conn->error;
            }
        }

        function showAll($tablename, $conn)
        {
            $sqlstr = "select * from $tablename";
            return $conn->query($sqlstr);
        }

        function closeCon($conn)
        {
            $conn->close();
        }
    }
?>
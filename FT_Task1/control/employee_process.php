<?php
    include("../model/db.php");
    $planguage = "";
    $des = "";
    if(isset($_POST["submit"]))
    {
        if(isset($_POST["java"]))
        {
            $planguage .= $_POST["java"];
        }
        if(isset($_POST["php"]))
        {
            $planguage .= $_POST["php"];
        }
        if(isset($_POST["cp"]))
        {
            $planguage .= $_POST["cp"];
        }
        if(isset($_POST["designation"]))
        {$des = $_POST["designation"];}
        $mydb = new db();
        $conobj = $mydb->openCon();
        $results = $mydb->insertUser("employee", $_POST["fname"], $_POST["lname"], $_POST["age"], $des, $planguage, $_POST["email"], $_POST["password"], $_FILES["file"]["name"], $conobj);
        $show= $mydb->showAll("employee", $conobj);
        $count = mysqli_num_rows($show);
        if($count>0)
        {
           while($row = mysqli_fetch_assoc($show))
           {
            echo"<center>";
            echo "First Name: ".$row['fname']."<br>";
            echo "Last Name: ".$row['lname']."<br>";
            echo "Age: ".$row['age']."<br>";
            echo "Designation: ".$row['designation']."<br>";
            echo "Langugage: ".$row['planguage']."<br>";
            echo "Email: ".$row['email']."<br>";
            echo "Password: ".$row['password']."<br>";
            echo "Picture: ".$row['picture']."<br>";
            echo"</center>";
           }
        }
        $mydb->closeCon($conobj);
    }
?>
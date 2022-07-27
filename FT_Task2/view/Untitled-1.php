<html>
    <head>
    <title>Page Title</title>
    <link rel= "stylesheet" type = "text/css" href = "../css/mystyle.css">
    </head>
    <body>
   
    <div class = "center">
        <h1>ABC Management System</h1>
        <h2>We Create Future</h2>
    </div>
   
    <p class = "space">Home AboutUs Shop</p>

    <div>
        <h3>Registration Form</h3>
    </div>

    <div class = "line-1"></div>
<br>
    </div>
   
    <form action="" method="POST" enctype = "multipart/form-data">
        <table>
       
        <tr>
            <td>First Name: </td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Age: </td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Designation: </td>
            <td>
                <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                <input type="radio" name="designation" value="Project Lead">Project Lead
            </td>
        </tr>
        <tr>
            <td>Preferred Language: </td>
            <td>
                <input type="checkbox"  name="java" value="JAVA" >JAVA
                <input type="checkbox"  name="php" value="PHP">PHP
                <input type="checkbox"  name="cp" value="Cp">C++
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Please choose a file: </td>
            <td><input type="file" name="file"></td>
        </tr>
        </table>
       
        <table class= "button">
        <tr>
           
                <input class="button" type="submit" name = "submit" value="Submit">
                <input class="button" type="reset" value="Reset">
           
        </tr>
        </table>
   
   
   
    </form>
   
    </body>
    </html>
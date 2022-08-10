<html>
    <head>
        <title></title>
    </head>
<body>

    <h1>Registration Form</h1>

    <form action="" method="POST" onsubmit="return validateForm()">
        <table>
        <tr>
            <td>First Name: </td>
            <td><input type="text" name="fname" id = "fname" onkeyup="validateName()"></td>
            <td><p id = "name_error"></p> </td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input type="text" name="lname" id = "lname" onkeyup="validateName()"></td>
        </tr>
        <tr>
            <td>Age: </td>
            <td><input type="text" name="age" id= "age" onkeyup="validateAge()" ></td>
            <td><p id = "age_error"></p> </td>
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
            <td><input type="text" name="email" id = "email" onkeyup="validateEmail()"></td>
            <td><p id = "email_error"></p> </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="text" name="password" id="password" onkeyup="validatePassword()"></td>
            <td><p id = "password_error"></p> </td>
        </tr>
        <tr>
            <td>Please choose a file: </td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
            <td><p id = "form_error"></p></td>
        </tr>


        </table>
    </form>

    <script src = "../js/myjs.js" ></script>

</body>
</html>
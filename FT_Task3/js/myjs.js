function validateName()
{
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;

    if (!/[^a-zA-Z]/.test(fname) && !/[^a-zA-Z]/.test(lname) && document.getElementById("fname").value != "" && document.getElementById("lname").value != "")
    {
        document.getElementById("name_error").innerHTML = "Name is ok";
        return true;
    }
    else 
    {
        document.getElementById("name_error").innerHTML = "Name is not ok, Fill both First and last name without number";
        return false;
    }
}

function  validateAge()
{
    var age =  document.getElementById("age").value;

    if (age.match(/^[0-9]+$/) != null)
    {
        document.getElementById("age_error").innerHTML = "Age is ok";
        return true;
    }
    else 
    {
        document.getElementById("age_error").innerHTML = "Age has only numbers";
        return false;
    }

}

function validateEmail() 
{
    var email = document.getElementById("email").value;

    const pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+com))$/;
    if (pattern.test(email)) 
    {
        document.getElementById("email_error").innerHTML = "Email is valid";
        return true;
    }
    else 
    {
        document.getElementById("email_error").innerHTML = "Email is not valid";
        return false;
    }
}

function validatePassword()
{
    var pass = document.getElementById("password").value;
    const pattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{9,}$/;

    if(pattern.test(pass))
    {
        document.getElementById("password_error").innerHTML = "Password is ok";
        return true;
    }
    else 
    {
        document.getElementById("password_error").innerHTML = "Password should contain both letter and number and size greater than 8";
        return false;
    }
}

function validateForm()
{
    if(validateName() && validateAge() && validateEmail() && validatePassword())
    {
        document.getElementById("form_error").innerHTML = "Everything is good";
        return true;
    }
    else 
    {
        document.getElementById("form_error").innerHTML = "Some things are invalid";
        return false;
    }
}
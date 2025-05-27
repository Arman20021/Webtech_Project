function validateForm() {
    let isValid = true;
  
    let fname = document.getElementById("fname").value.trim();
    let lname = document.getElementById("lname").value.trim();
    let uname = document.getElementById("uname").value.trim();
    let email = document.getElementById("mail").value.trim();
    let password = document.getElementById("pass").value;
    let cnfpass = document.getElementById("cnfpass").value;
    let genderSelected = document.querySelector('input[name="gender"]:checked');

  
    if (fname == "") {
        document.getElementById("fnameError").innerHTML = "First Name is required.";
        isValid = false;
    }

    if (lname === "") {
        document.getElementById("lnameError").innerHTML = "Last Name is required.";
        isValid = false;
    }

    if (uname === "") {
        document.getElementById("unameError").innerHTML = "User Name is required.";
        isValid = false;
    }

    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
    } else if (!/\S+@\S+\.\S+/.test(email))
         {
        document.getElementById("emailError").innerHTML = "Enter a valid email.";
        isValid = false;
    }

    if (password === "") {
        document.getElementById("passwordError").innerHTML = "Password is required.";
        isValid = false;
    } else if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    if (cnfpass === "") {
        document.getElementById("cnfpassError").innerHTML = "Confirm your password.";
        isValid = false;
    } else if (cnfpass !== password) {
        document.getElementById("cnfpassError").innerHTML = "Passwords do not match.";
        isValid = false;
    }

    if (!genderSelected) {
        document.getElementById("genderError").innerHTML = "Please select a gender.";
        isValid = false;
    }

    

    return isValid;
    
}
function clearErrors() {
    document.getElementById("fnameError").innerHTML = "";
    document.getElementById("lnameError").innerHTML = "";
    document.getElementById("unameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("cnfpassError").innerHTML = "";
    document.getElementById("genderError").innerHTML = "";
}

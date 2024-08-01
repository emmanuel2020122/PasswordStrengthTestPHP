<!DOCTYPE HTML>
<html>
<head>
    <title> Test site </title>
</head>
<body>


<input type="password" id="passwordInput" onkeyup="checkPasswordStrength()">
<div id="passwordStrength"></div> 




<script>
function checkPasswordStrength() {
    const password = document.getElementById('passwordInput').value;
    const strengthIndicator = document.getElementById('passwordStrength');

    // Define your password strength criteria (e.g., length, character types)
    const minLength = 8;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const hasNumber = /\d/.test(password);
    const hasSpecialChar = /[!@#$%^&*()_+{}|<>]/.test(password);

    // Calculate the password strength score
    let score = 0;
    if (password.length >= minLength) score++;
    if (hasUppercase) score++;
    if (hasLowercase) score++;
    if (hasNumber) score++;
    if (hasSpecialChar) score++;

    // Provide feedback to the user
    if (score === 5) {
        strengthIndicator.textContent = 'Strong password!';
        strengthIndicator.style.color = 'green';
    } else if (score >= 3) {
        strengthIndicator.textContent = 'Medium strength';
        strengthIndicator.style.color = 'orange';
    } else {
        strengthIndicator.textContent = 'Weak password. Please choose a stronger one.';
        strengthIndicator.style.color = 'red';
    }
}

</script>

</body>



</html>  
<!DOCTYPE html>
<head>
<style>
 .PasswordDiv{  
    margin-top:25%;
    align:center;
    Display:grid;
    Justify-content:center;
    align-items:center;
 
 }
 .passwordInput{
    width:50px;
 }
</style>
</head>
<body>

<h1>The XMLHttpRequest Object</h1>

<h3>Start typing a name in the input field below:</h3>


<div class="PasswordDiv">
<input type="password"    id="passwordInput" onkeyup="showHint(this.value)">
<br/>
<div id="MinimumChar">Minimum 8 characters</div>
<br/>
<div id="UpperCase">At least one UpperCase letter</div>
<br/>
<div id="LowerCase">At least one LowerCase Letter</div>
<br/>
<div id="SpecialChar">At least one special character (e.g., !@#$%^&*)</div>
<br/>
<div id="passwordStrength"></div> 
</div>



<p>Suggestions: <span id="txtHint"></span></p> 

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.response);
                switch(this.response){
                    case(0):
                        document.getElementsByTagName("div").style.color = 'red';
                    case(1):
                        document.getElementById("MinimumChar").style.color = 'green';
                        continue;
                    case(2):
                        document.getElementById("MinimumChar").style.color = 'green';
                        continue;
                    case(3):
                        document.getElementById("MinimumChar").style.color = 'green';
                        continue;
                    case(4):
                    document.getElementById("MinimumChar").style.color = 'green';
                    continue;
                    case(5):
                    document.getElementById("MinimumChar").style.color = 'green';
                    break;

                }
        
    
    }
  };
  xhttp.open("GET", "backend.php?q=" + str, true); 
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(); 
}
</script>

</body>
</html>
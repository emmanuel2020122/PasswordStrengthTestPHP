<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
 div,form{  
    margin-top:;
    
    align:right;
    Display:grid;
    Justify-content:left;
    align-items:right;
    height:0.05vh;
    
 }
 .passwordDiv{
  
   position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);

 }
 .my-input {
    width: 300px;
    height:20px;
}
 
</style>
<script>
function showHint(str) {
 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      
        var x =this.responseText.trim();
      
        if(x.match(/a/i)){
           document.getElementById("MinimumChar").style.color='green'; 
        }else{
         document.getElementById("MinimumChar").style.color='red'; 
        }
        if(x.match(/b/i)){
           document.getElementById("UpperCase").style.color='green'; 
           
        }else{
         document.getElementById("UpperCase").style.color='red'; 
        }
       if(x.match(/c/i)){
           document.getElementById("LowerCase").style.color='green'; 
           
        }else{
         document.getElementById("LowerCase").style.color='red'; 
        }
        if(x.match(/d/i)){
           document.getElementById("Number").style.color='green'; 
           
        }else{
         document.getElementById("Number").style.color='red'; 
        }
        if(x.match(/e/i)){
           document.getElementById("SpecialChar").style.color='green'; 
        }else{
         document.getElementById("SpecialChar").style.color='red'; 
        }
       
      }
      
     
    }
    xmlhttp.open("GET", "backend.php?q="+str, true);
    xmlhttp.send();
   
  
}

</script>
</head>
<body>
<div class="passwordDiv">
<p><b>Password Strength Test</b></p>
<form action="">
 
  <input type="text" class="my-input" id="fname" name="fname" onkeyup="showHint(this.value)">
</form> 
<br/>
<br/>
<div id="MinimumChar">Minimum 8 characters</div>
<br/>
<div id="UpperCase">At least one UpperCase letter</div>
<br/>
<div id="LowerCase">At least one LowerCase Letter</div>
<br/>
<div id="Number">At least one  number/digit</div>
<br/>
<div id="SpecialChar">At least one special character (e.g., !@#$%^&*)</div>
<br/>

</div>
</body>
</html>

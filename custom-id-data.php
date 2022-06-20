<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Estamp Org</title>
    <meta name="desciption" content="#">
    <link rel="icon" type="image/x-icon" href="elogo.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="theme-color" content="#0000006" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="#">
</head>
<body>
<form method="post" action="idvalidator" method="post">
  <div class="container">
    <h1>ID GENERATOR PRO</h1>
    <p>Please fill in this form  to create an account.(Account valid only immediatley after creating)</p>
    <label for="fistname"><b>FULL NAME</b></label>
    <input type="text" placeholder="Enter Fistname" name="name" id="psw" required>

    <label for="lastname"><b>DATE OF BIRTH </b></label><br>
    <input type="date" placeholder="Enter Date" name="dob" id="psw" required> 
    <br>

    <label for="username"><b>SEX</b></label>
    <input type="text" placeholder="Enter MALE/FEMALE" name="sex" id="psw" required>
  
    <label for="email"><b>PLACE OF BIRTH</b></label>
    <input type="text" placeholder="Enter Place of birth" name="pob" id="psw" required>
    
    <label for="psw"><b>PLACE OF ISSUE</b></label>
    <input type="text" placeholder="Enter Password" name="poi" id="psw" required>
    <label for="lastname"><b>DATE OF ISSUE </b></label> <br>
    <input type="date" placeholder="Enter Date" name="doi" id="psw" required> 
    <br>
   


    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="upload" value="Submit" class="registerbtn" action="idver.php" method="post">Register</button>
  
</div>
  
  <div class="container signin">
    <p>Already have an account? <a href="/generateid">Create ID</a>.</p>
  </div>
</form>

</body>
</html>

<html>
<head>
    <title>Mobile Shop</title> 
    
     <!-- CSS za kalendar -->
     <link rel="stylesheet" href="css/jquery-pseudo-ripple.css">
    <link rel="stylesheet" href="css/jquery-nao-calendar.css">
     <!-- Ucitavamo jquery -->
     <script src="js/jquery.js"></script>
</head>

<body>

<form  name="registar" action='obradaregistracije.php' method='post' accept-charset='UTF-8'>
   
<fieldset> <!-- crta okvir oko povezanih elemenata -->
<legend><h3>Forma za registrovanje</h3></legend> <!-- ovo je natpis za fieldset elemente -->

<p align="left">
Korisničko ime:
<input type='text' name="usernameregistar" />
</p>

<p align="left">
Šifra:
<input type='password' name="passwordregistar" />
</p>

<p align="left">
Email:
<input type='email' id="email" name="emailregistar"/>
</p>

<p align="left">  
<input type='submit' name="submitregistar" value="Registracija" />
</p>

<p align="left">
<button id="submit1" formaction="index.php">Nazad</button> 
</p>

</fieldset>
</form>

  
<div class="myCalendar" style="background-color: #000; color: #FFF"></div>

<script src="js/jquery-pseudo-ripple.js"></script>
<script src="js/jquery-nao-calendar.js"></script>

<script>
    $('.myCalendar').calendar({
        date: new Date(),
        autoSelect: false,
        hideYearPicker: true
    });
</script>

</body>


<style>
legend{
padding-top: 40px;
}

body{
font-family: sans-serif;
font-weight: 400;
line-height: 1em;
color: #FFF;
}

fieldset{
background-image: url('img/Android.jpg');
background-size: cover;
background-position: center top;
background-repeat: no-repeat;
font-family: 'Times New Roman', Times, serif;
font-size: 20pt;    
}

#submit1{
transition-duration: 0.5s;
border-radius: 50px;
font-size: 15px;
color:white;
background-color: #000;  
}

#submit1:hover{
background-color: #FFF;
color: white;
}

.myCalendar {
border: 5px solid #a9deb2;
box-sizing: border-box;
border-radius: 5px;
}

</style>


</html>
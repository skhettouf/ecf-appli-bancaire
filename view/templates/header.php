<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application de gestion bancaire</title>
  <style>
    
  body {margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
  background-color: #4CAF50;
}
nav{color: white; 
  width: 100%;
  margin: 0 auto;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
} 
 a{text-decoration: none;
color: antiquewhite;}

.menu{ border-radius: 20% ;
  background-color:olive;
  padding: 1em .5em;
  margin: 0 .1em;
  text-align: center;}
h2{
    padding:20px 30px;}
ol{
 display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin: 0 auto;
  padding: .5em 0;
  background-color: darkolivegreen;
  list-style: none;
 }

form {
  width: 400px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #fff;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}</style>
</head>
<body>
    
 <nav class="nav">
        <ol> 
        <h2>Application de gestion bancaire</h2>
          <li class="menu"><a href="/ECF4/view/client_form.php"> Ajouter un client</a></li>
          <li class="menu"><a href="/ECF4/view/compte_form.php">Ajouter un compte</a></li>
          <li class="menu"><a href="/ECF4/view/contrat_form.php">Ajouter un contrats</a></li>
          <li class="menu"><a href="/ECF4/view/liste_clients.php">Liste des clients</a></li>
          <li class="menu"><a href="/ECF4/view/liste_comptes.php">Liste des comptes</a></li>
          <li class="menu"><a href="/ECF4/view/liste_contrats.php">Liste des contrats</a></li>
          </ol>
      </nav>
      <?php // if(isset($_SESSION['username'])): ?>
        <!--<nav class="navbar navbar-light bg-light">
            <div class="container">
                <span class="navbar-text">
                    Vous naviguez en tant que: <?//=$_SESSION['username'] ?>
                </span>
            </div>
        </nav>
    <?php //endif; ?>
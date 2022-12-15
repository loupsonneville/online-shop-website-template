<!DOCTYPE html>
<html lang="en">

<?php 
include 'connexion.inc.php';

?>

<head>
  <meta charset='utf-8'>
  <title>Connexion to your account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Appel de la Feuille de style minifiée De La librairie Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Appel de la Feuille de style minifiée De l'extension Datepicker -->
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- Appel de la Bibliothèque Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Appel de la police Montserrat et Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:300" rel="stylesheet">
  <!-- Feuille de style Personnalisée -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Connexion to your account</title>
</head>



<body>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      
      <button href="test_connexion.php" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
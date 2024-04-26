
<?php
 $nom="";
 $prenom="";
  $telephone="";
  $email="";

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
     $telephone=$_POST["telephone"];
     $email=$_POST["email"];


     do {
        if (empty($nom) || empty($prenom) || empty($telephone) || empty($email)) {
            $errorMessage = "Tous les champs sont obligatoires."
    } while (false);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-5"></div>
    <h2>New client</h2>
    <form method="post"></form>
    <div class="row mb-3">
       <label class="col-sm-3 col-from-label">nom</label>
       <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="<?php echo $nom;?>">
       </div>
    </div>
    <div class="row mb-3">
       <label class="col-sm-3 col-from-label">prenom</label>
       <div class="col-sm-6">
        <input type="text" name="name" class="form-control" value="<?php echo $prenom;?>">
       </div>
    </div> 
    
    <div class="row mb-3">
       <label class="col-sm-3 col-from-label">telephone</label>
       <div class="col-sm-6">
        <input type="text" name="email" class="form-control" value="<?php echo $telephone;?>">
       </div>
    </div>

    <div class="row mb-3">
       <label class="col-sm-3 col-from-label">EMAIL</label>
       <div class="col-sm-6">
        <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
       </div>
    </div>
   

    <div class="row mb-3">
       <button class="btn btn-primary">envoyer</button>
    </div>
    <div class="row mb-3">
       <button class="btn btn-primary" href="/CRM/index1.php" role="button">cancel</button>
    </div>
 
    
</body>
</html>
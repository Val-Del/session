<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include'form.php'; 

if(isset($_POST["submit"])){
    if(empty($_POST['name']) || empty($_POST['prenom'])){
        echo "*champs obligatoire";
    }
    else {
        
        $name=htmlspecialchars($_POST['name']);
        $prenom=htmlspecialchars($_POST['prenom']);

        $_SESSION["utilisateur"] = [
            "nom" => $name,
            "prenom" => $prenom
        ];
        echo "formulaire envoyer";
    }      
}
?>
</body>
</html>
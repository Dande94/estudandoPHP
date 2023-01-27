<pre>
</pre>
<?php
// print_r($_FILES);

if(isset($_FILES['arquivos'])){

    if(count($_FILES['arquivos']['tmp_name']) > 0 ){

        for($q=0;$q<count($_FILES['arquivos']['tmp_name']);$q++){

            $nomedoarquivo = md5($_FILES['arquivos']['name'][$q].time().rand(0,999)).'.jpg';
        
            move_uploaded_file($_FILES['arquivos']['tmp_name'][$q],'arquivo/'.$nomedoarquivo);
        }
    
    }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST">
        <!-- name array -> name="arquivo[] -->
        <input type="file" name="arquivos[]" multiple id=""> <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
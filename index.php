<?php 
$alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$uppercase=['A','B','C','D','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];
$numbers=['0','1','2','3','4','5','6','7','8','9'];
$symbols=['@','#','§','*','/','&','%',"^",'(',')'];

$full_characters = array_merge($alphabet,$uppercase,$numbers,$symbols);

if( isset($_GET['length'])){
    $password = "";
    for($i = 0; $i < $_GET['length']; $i++){
        $random_character = rand(0,count($full_characters));
        $password .= $full_characters[$random_character];
    }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="password-length" class="form-label">Lunghezza Password</label>
                <input type="number" class="form-control" id="password-length" name="length" min="8" max="32">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>

        <?php if($password): ?>
            <div class="alert alert-success">
                <?php echo $password ?>
            </div>
            <?php endif; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
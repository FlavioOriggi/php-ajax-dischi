<?php
    include 'dischiItem.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>    
    
    <header></header>
    
    <main>
        <div class="container-xl">
            <div class="row row-cols-5 g-3">
                
                    <?php foreach ($mytopten as $disco => $element) { ?> 
                        <div class="card-container mb-3">                   
                            <div class="col card-contenent bg-secondary">                     
                                <img class="card-item" src="<?php echo $element['poster']?>" >
                                <div class="p-1 bg-secondary"> 
                                    <div class="text-title"><h5> <?php echo $element['title']?> </h5></div>                        
                                    <p class="fw-bold fs-5"> <?php echo $element['author']?> </p>
                                    <p> <?php echo $element['year']?> </p>
                                </div>                                        
                            </div>
                        </div>
                    <?php } ?>
                
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
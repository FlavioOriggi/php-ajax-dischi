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
    <style>
        header{
            height:100px;
            background-color: lightgreen;
        }
        .card-item{
            width: 100%;
        }
    </style>
</head>
<body>    
    
    <header></header>
    
    <main class="bg-dark">
        <div class="container-xl">
            <div class="row row-cols-5 g-3 pt-5 pb-5">
                <?php foreach ($mytopten as $disco => $element) { ?>                    
                    <div class="col py-1">                     
                        <img class="card-item" src="<?php echo $element['poster']?>" >
                        <div class="p-1 bg-secondary">                            
                            <h5> <?php echo $element['title']?> </h5>
                            <p class="fw-bold fs-5"> <?php echo $element['author']?> </p>
                            <p> <?php echo $element['year']?> </p>
                        </div>                                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
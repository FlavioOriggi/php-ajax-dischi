<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body> 
    <div id="app">  
    
        <header></header>
        
        <main>
            <div class="container-xl">
                <div class="row row-cols-5 g-3">               
                        
                    <div class="card-container mb-3" v-for="track in mytopten">                   
                        <div class="col card-contenent bg-secondary">                     
                            <img class="card-item" :src="track.poster" >
                            <div class="p-1 bg-secondary"> 
                                <div class="text-title"><h5>{{track.title}} </h5></div>                        
                                <p class="fw-bold fs-5">{{track.author}}</p>
                                <p> {{track.year}} </p>
                            </div>                                        
                        </div>
                    </div>                        
                    
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
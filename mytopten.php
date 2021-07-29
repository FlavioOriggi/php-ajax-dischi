
<?php     
    $mytopten=[
        [
            'title' => 'Always',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://www.bonjovimusic.it/upload/album/49/always-medium.jpg'
        ],
        [
            'title' => 'Il Mio Canto Libero',
            'author' => 'Lucio Battisti',
            'year' => 1984,
            'poster' => 'https://www.luciobattisti.info/wp-content/gallery/album_lucio_battisti/zmln33381_b.jpg'
        ],
        [
            'title' => 'Nikita',
            'author' => 'Elton John ',
            'year' => 1985,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51j%2Brt3j4mL._AC_.jpg'
        ],
        [
            'title' => 'Paranoid',
            'author' => 'Black Sabbath',
            'year' => 1994,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71vSn%2BlK4WL._AC_SL1425_.jpg'
        ],
        [
            'title' => 'Killer/Papa Was A Rolling Stone',
            'author' => 'George Michael',
            'year' => 1995,
            'poster' => 'https://cdn.shopify.com/s/files/1/0875/4564/products/R-931783-1570958007-1804_jpeg_1024x1024.jpg?v=1583853769'
        ],
        [
            'title' => 'Fire',
            'author' => 'Ferry Corsten',
            'year' => 2006,
            'poster' => 'https://geo-media.beatport.com/image_size/1400x1400/96450f17-f18c-4e48-abc0-936c59a06859.jpg'
        ],
        [
            'title' => 'Jeopardy (Extended Version)',
            'author' => 'Greg Kihn Band',
            'year' => 1983,
            'poster' => 'https://img.discogs.com/6fdJT-qbVy17Z0WppOKuj0Sor2o=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1014437-1511090036-6648.jpeg.jpg'
        ],
        [
            'title' => 'Take Your Time (80s Disco Purrfection Version)',
            'author' => 'The SOS Band',
            'year' => 2007,
            'poster' => 'https://img.discogs.com/FPQx3u375jIhDS46UUkbpBnjPyU=/fit-in/598x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1433242-1267710899.jpeg.jpg'
        ],
        [
            'title' => 'Move On Up',
            'author' => 'Curtis Mayfield',
            'year' => 1970,
            'poster' => 'https://i.scdn.co/image/ab67616d0000b2736e74d6ce3233912d1f8af3cd'
        ],
        [
            'title' => 'Im So Excited (Solid State Dance Remix)',
            'author' => 'Nina Badrić',
            'year' => 1997,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/511tbll7kCL._AC_SX466_.jpg'
        ]
    ];
    
header('Content-Type: application/json');
echo json_encode($mytopten);
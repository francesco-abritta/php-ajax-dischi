<?php
    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Tens Summoners Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Tens Summoners Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dischi</title>
</head>
<body>
    <div class="header">
        <img src="logo-small.svg" alt="">
    </div>
    <div class="main">
        <div class="items">            
                <?php
                    foreach($database as $elemento){
                        echo '<div class="card">';
                            echo "<div class='image'><img src='$elemento[poster]'></div>";
                            echo "<div class='title'>$elemento[title]</div>";
                            echo "<div class='author'>$elemento[author]</div>";
                            echo "<div class='year'>$elemento[year]</div>";
                        echo '</div>';
                    };
                ?>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> -->
    <!-- <script>
        let app = new Vue({ 
        el: "#primoVue",
        data: {
            
        },
        methods: {
            ciao: function(){

            }
        }
        });

        Vue.config.devtools = true;
    </script> -->
</body>
</html>


<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .header{
        height: 60px;
        background-color: #2D3A46;
        display: flex;
        align-items: center;
    }

    .header img{
        height: 40px;
        padding-left: 20px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap');

    .main{
        min-height: calc(100vh - 60px);
        background-color: #1E2D3B;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Roboto' , sans-serif;
    }

    .items{
        display: flex;
        flex-wrap: wrap;
        max-width: 1000px;
    }

    .card{
        height: 300px;
        width: 170px;
        padding: 20px;
        text-align: center;
        margin: 0px 25px 15px 0px;
        background-color: #2D3A46;
    }

    .card img{
        height: 130px;
        width: 130px;
    }

    .card .title{
        color: white;
        text-transform: uppercase;
        font-style: bold;
        margin: 15px 0;
        font-size: 20px;
    }

    .card .author, .card .year{
        color: #7A776F;
        font-size: 15px;
    }
</style>
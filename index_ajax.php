<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <title>Dischi</title>
</head>
<body>
    <div id="root">

        <header>
            <div class="container">
                <img src="img/logo.png" alt="">
                <label for="type">Filtra per autore</label>
                <select v-model="filterAuthor" name="type" id="type" @change="getAlbum()">
                    <option value="all">All</option>
                    <option v-for="type in types" :value="type" >{{type}}</option>
                </select>

            </div>
        </header>

        <main>
            <div class="container">
                <div class="cards">
                    
                    <div class="card" v-for="album in albums">
                        <div class="cardImage">
                            <img :src="album.poster" alt="">
                        </div>
                        <div class="cardInfo">
                            <h3>{{album.title}}</h3>
                            <p>{{album.author}}</p>
                            <h3>{{album.year}}</h3>
                        </div>

                    </div>

                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIPPATH SEMANA 6</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .contenedor{
                width: 400px;
                height: 800px;
                border: 1px solid black;
                margin: 0 auto;
                position: relative;
                overflow: hidden;
        }
        .sombrero{
            width:200px;
            height: 150px;
            background-image:url(assets/cuero.jpg);
            backgroun-size: cover;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            position: absolute;
            top:0px;
            left:300px;
        }
        .brazos{
            width:400px;
            height: 150px;
            background-image:url(assets/piel.jpg);
            backgroun-size: cover;
            clip-path: polygon(90% 49%, 100% 60%, 90% 71%, 13% 71%, 0% 60%, 13% 48%);
            position: absolute;
            top:300px;
            left: 190px;
        }
        .oberol{
            width:200px;
            height: 300px;
            background-image:url(assets/jean.jpg);
            backgroun-size: cover;
            clip-path: polygon(29% 0, 69% 0, 100% 100%, 0% 100%);
            position: absolute;
            top:300px;
            left:300px;
        }
        .marco1{
            width:200px;
            height: 200px;
            background-image:url(assets/sonrisa2.jpg);
            backgroun-size: cover;
            clip-path: circle(50% at 50% 50%);
            position: absolute;
            top:125px;
            left:300px;
        }
        .zapatod{
            width:150px;
            height: 150px;
            background-image:url(assets/gamuza.jpg);
            backgroun-size: cover;
            clip-path: polygon(34% 32%, 73% 33%, 88% 46%, 88% 61%, 73% 71%, 30% 70%, 19% 61%, 20% 46%);
            position: absolute;
            top:550px;
            left:250px;
            animation: moverAbajo1 2s ease-in-out forwards;
        }
        .zapatoi{
            width:150px;
            height: 150px;
            background-image:url(assets/gamuza.jpg);
            backgroun-size: cover;
            clip-path: polygon(34% 32%, 73% 33%, 88% 46%, 88% 61%, 73% 71%, 30% 70%, 19% 61%, 20% 46%);
            position: absolute;
            top:550px;
            left:400px;
            animation: moverAbajo2 2s ease-in-out forwards;
        }
        .barquillo{
            width:100px;
            height: 100px;
            background-image:url(assets/galleta.jpg);
            backgroun-size: cover;
            clip-path: polygon(51% 100%, 26% 0, 78% 0);
            position: absolute;
            top:300px;
            left: 190px;
        }
        .helado1{
            width:50px;
            height:50px;
            background-image:url(assets/vainilla.jpg);
            backgroun-size: cover;
            clip-path: circle(50% at 50% 50%);
            position: absolute;
            top:260px;
            left: 195px;
        }
        .helado2{
            width:50px;
            height:50px;
            background-image:url(assets/fresa.jpg);
            backgroun-size: cover;
            clip-path: circle(50% at 50% 50%);
            position: absolute;
            top:260px;
            left: 235px;
        }
        .helado3{
            width:50px;
            height:50px;
            background-image:url(assets/menta.jpg);
            backgroun-size: cover;
            clip-path: circle(50% at 50% 50%);
            position: absolute;
            top:235px;
            left: 215px;
        }
        @keyframe moverAbajo1{
            0% { transform: translateY(0); }
            100% { transform: translateY(200px); }
        }
        @keyframe moverAbajo2{
            0% { transform: translateY(0); }
            100% { transform: translateY(200px); }
        }
    </style>
</head>
<body>
    <div class="contenedor"></div>
    <div class="brazos"></div>
    <div class="oberol"></div>
    <div class="marco1"></div>
    <div class="sombrero"></div>
    <div class="zapatod"></div>
    <div class="zapatoi"></div>
    <div class="barquillo"></div>
    <div class="helado1"></div>
    <div class="helado2"></div>
    <div class="helado3"></div>


</body>
</html>

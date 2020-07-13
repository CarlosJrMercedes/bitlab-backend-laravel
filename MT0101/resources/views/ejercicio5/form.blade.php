<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    .btn{
        text-decoration: none;
        padding: 5px;
        font-weight: 600;
        font-size: 15px;
        color: black;
        background-color: green;
        border-radius: 6px;
        border: 2px solid black;
    }
    .btn:hover{
        color: black;
        background-color: #ffffff;
        cursor: pointer;
    }

    .caja{
        background: silver;
        border: 1px solid #393939;
        border-radius: 5px 5px 5px 5px;
        color: #393939;
        font-size: 12px;
        padding: 5px; 
        width: 150px;
    }
    .caja:focus{
        border: 1px solid blue;
        background-color: #ffffff;
    }
</style>
</head>
<body>
<ul>
        <li>
            <a href="<?php echo route('uno')?>" class="btn">ejercicio 1</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('dos')?>" class="btn">ejercicio 2</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('tres')?>" class="btn">ejercicio 3</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('cuatro')?>" class="btn">ejercicio 4</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('cinco')?>" class="btn">ejercicio 5</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('seis')?>" class="btn">ejercicio 6</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('siete')?>" class="btn">ejercicio 7</a>
        </li>
        <br>
        <li>
            <a href="<?php echo route('ocho')?>" class="btn">ejercicio 8</a>
        </li>
        <br>
    </ul>
    <br>
    <div style="text-align: center;color:brown;padding-top:5%;">
        <h1><strong>Ejercicio 5º</strong></h1>
    </div>
    <br>
    
    <div>
        <form action="blade-result-5" method="POST" style="text-align: center;">
            @csrf
            <label for="" style="color: blue;"><h2><strong>Ingrese las edades separadas por " , " :</strong></h2></label>
            <input type="text" name="edades" require class="caja">
            <br>
            <br>
            <input type="submit" value="ENVIAR" class="btn">
        </form>
    </div>

</body>
</html>
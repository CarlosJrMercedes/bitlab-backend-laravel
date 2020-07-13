<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    @foreach($result as $r)
        {{$r}}<br>
    @endforeach
    
</body>
</html>
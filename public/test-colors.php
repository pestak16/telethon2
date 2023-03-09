<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telethon group 2</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <div class="container">
<?php
//test font and colors 
/*
$dark:#2B1C1A;
$light: #F0F0F0;
$success:#8CD50A;
$danger: #FC6303;
$primary: #038591;
$secondary:#025C64;
$info: #EECB5E;
*/

$colors=['dark','light','success','danger','primary','secondary','info'];
print_r($colors);

echo "<h1>Custom bootstrap colors</h1>";
foreach($colors as $color){
  echo '<a href=# class="btn btn-'.$color.'">'.$color.'</a> ';
}
echo '<hr />';





$icons=[];
$icons['Delete'] = '<i class="fa-solid fa-x"></i>';
$icons['Modifier'] = '<i class="fa-solid fa-pencil"></i>';
$icons['Collectes'] = '<i class="fa-solid fa-hand-holding-dollar"></i>';
$icons['Profil'] = '<i class="fa-solid fa-circle-user"></i>';
$icons['Partenaires'] = '<i class="fa-solid fa-handshake-angle"></i>';
$icons['Stands'] = '<i class="fa-solid fa-table-tennis-paddle-ball"></i>';
$icons['Utilisateurs'] = '<i class="fa-solid fa-users"></i>';
$icons['Utilisateur'] = '<i class="fa-solid fa-user"></i>';

echo "<h1>App Icons</h1>";

foreach($icons as $k=>$ico){
  echo "$ico - $k   <i class='text-muted font-monospace'>".htmlentities($ico)."</i><br />";
}
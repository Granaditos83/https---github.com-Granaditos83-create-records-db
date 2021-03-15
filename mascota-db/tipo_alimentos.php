<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Rancho&display=swap" rel="stylesheet">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stick&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="patitas.jpg">
    
</head>
<body>
    

<form action="alimento.php" method="post">


<h2>Type of food</h2>
<h3>Choose food</h3>

<p> 
<img src="https://www.infobae.com/new-resizer/g-nl_hV_iywneW_Pdsm-JwXu5Wc=/1024x512/filters:format(jpg):quality(85)//s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/11/30152236/Perros-vs-Gatos2.jpg"
         style="width: 300px; height: px; margin: px " align="right">
</p>

<input type="int" list="referencia" name="referencia"placeholder="reference"required />
<datalist id="referencia">
    <option label="1010" value="1010">
    <option label="1111" value="1111">
</datalist>

<input type="text" list="nombre_referencia" name="nombre_referencia"placeholder="Reference name"required />
<datalist id="nombre_referencia">
    <option label="Cuidacat" value="Cuidacat">
    <option label="dowchaut" value="dowchaut">
</datalist>

<input type="date_time_set" list="hora_suministro" name="hora_suministro"placeholder="Schedule to supply"required />
<datalist id="hora_suministro">
    <option label="10:00" value="10:00">
    <option label="15:00" value="15:00">
</datalist>






<p><input type="submit" name="enviar" value="Send data"/></p>



    
</body>
</html>

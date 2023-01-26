<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include_once __DIR__ ."/Classes/Persona.php";
        $persone = [
            new Persona("gianluca","demartino","12/07/1993","Barletta","asdasdasasd"),
            new Persona("Marco","rossi","02/10/1999","Roma","cfmarcorossi"),
            new Persona("Paolo","Bianchi","22/11/1999","Milano","cfpaolobianchi"),
        ];

    ?>
</head>
<body>
    <?php foreach($persone as $persona){
        
     ?>
    <div class="col-12">
        <h5>
            <?php echo $persona -> nome ?>
        </h5>
    </div>





    <?php
    }
    ?>
</body>
</html>
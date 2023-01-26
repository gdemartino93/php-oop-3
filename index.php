<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

    <?php
        include_once __DIR__ ."/Classes/Persona.php";
        $persone = [
            new Persona("gianluca","demartino","12/07/1993","Barletta","cfgianluca"),
            new Persona("Marco","rossi","02/10/1999","Roma","cfmarcorossi"),
            new Persona("Paolo","Bianchi","22/11/1999","Milano","cfpaolobianchi"),
        ];

    ?>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cognome</th>
      <th scope="col">Città di nascita</th>
      <th scope="col">Data di nascita</th>
      <th scope="col">Codice Fiscale</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($persone as $persona){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $persona -> nome ?></td>
      <td><?php echo $persona -> cognome ?></td>
      <td><?php echo $persona -> cittaDiNascita ?></td>
      <td><?php echo $persona -> dataDiNascita ?></td>
      <td><?php echo $persona -> cf ?></td>
    </tr>
    
<?php }
    ?>
  </tbody>
</table>
    





    
</body>
</html>
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
        include_once __DIR__ ."/Classes/Stipendio.php";
        include_once __DIR__ ."/Classes/Impiegato.php";
        $persone = [
            new Impiegato("gianluca","demartino","12/07/1993","Barletta","cfgianluca","12/07/2022",new Stipendio(1200,1000,1000)),
            new Impiegato("marco","rossi","14/02/1987","Roma","cfmarco","14/02/2014",new Stipendio(1000,null,null)),
            new Impiegato("paolo","bianchi","02/01/1989","Ancona","cfpaolo","22/11/2005",new Stipendio(1200,null,null)),
            new Impiegato("laura","gialli","22/11/1991","Milano","cflaura","23/12/2021",new Stipendio(1400,1000,1000)),


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
      <th scope="col">Stipendio</th>
      <th scope="col">Stipendio Annuale</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($persone as $persona){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $persona -> getNome() ?></td>
      <td><?php echo $persona -> getCognome() ?></td>
      <td><?php echo $persona -> getCittaDiNascita() ?></td>
      <td><?php echo $persona -> getDataDiNascita() ?></td>
      <td><?php echo $persona -> getCf() ?></td>
      <td><?php echo $persona -> getStipendioMensile()  ?></td>
      <td><?php echo $persona -> getStipendioAnnuale()  ?> &euro;</td>

    </tr>
    
<?php }
    ?>
  </tbody>
</table>
    





    
</body>
</html>
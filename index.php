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
        include_once __DIR__ ."/Classes/Capo.php";
        $impiegati = [
            new Impiegato("gianluca","demartino","12/07/1993","Barletta","cfgianluca","12/07/2022",new Stipendio(1000,1000,1000)),
            new Impiegato("marco","rossi","14/02/1987","Roma","cfmarco","14/02/2014",new Stipendio(1000,null,null)),
            new Impiegato("paolo","bianchi","02/01/1989","Ancona","cfpaolo","22/11/2005",new Stipendio(1000,null,null)),
            new Impiegato("laura","gialli","22/11/1991","Milano","cflaura","23/12/2021",new Stipendio(1000,1000,100)),
        ];
        $capi = [
            new Capo("Marco","Capo","12/01/1960","Roma","cfsasdasdasd", 500,2000),
            new Capo("Gianluca","Rossi","30/05/1982","Milano","cfgianlucarossi",20,5000)
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
  <?php foreach($impiegati as $impiegato){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $impiegato -> getNome() ?></td>
      <td><?php echo $impiegato -> getCognome() ?></td>
      <td><?php echo $impiegato -> getCittaDiNascita() ?></td>
      <td><?php echo $impiegato -> getDataDiNascita() ?></td>
      <td><?php echo $impiegato -> getCf() ?></td>
      <td><?php echo $impiegato -> getStipendioMensile()  ?></td>
      <td><?php echo $impiegato -> getStipendioAnnuale()  ?> &euro;</td>

    </tr>
    
<?php }
    ?>
  </tbody>
</table>

<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cognome</th>
      <th scope="col">Città di nascita</th>
      <th scope="col">Data di nascita</th>
      <th scope="col">Codice Fiscale</th>
      <th scope="col">Dividendo</th>
      <th scope="col">Bonus</th>
      <th scope="col">Stipendio Annuale</th>
    </tr>
  </thead>
<tbody>
  <?php foreach($capi as $capo){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $capo -> getNome() ?></td>
      <td><?php echo $capo -> getCognome() ?></td>
      <td><?php echo $capo -> getCittaDiNascita() ?></td>
      <td><?php echo $capo -> getDataDiNascita() ?></td>
      <td><?php echo $capo -> getCf() ?></td>
      <td><?php echo $capo -> getDividendo() ?></td>
      <td><?php echo $capo -> getBonus() ?></td>
      <td><?php echo $capo -> getRedditoAnnuale() ?></td>


    </tr>
    
<?php }
    ?>
  </tbody>
</table>




    
</body>
</html>
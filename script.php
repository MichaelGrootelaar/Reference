<?php
  session_start();
  /**
  * Tekst opschonen.
  *
  * @parm string $woord
  * @return string
  */
  function opschonen($woord){
    return ucwords(strtolower($woord));
  }

  $a = ' dEzE TeKSt wOrDt opgeSchoond';
  $b = &$a;

  $_SESSION['uitkomst'] = opschonen($b);
  $_SESSION['uitkomst2'] = $a;

  $c = ' dEzE TeKSt wOrDt opgeSchoond';
  $d = &$c;

  $_SESSION['uitkomst3'] = opschonen($c);
  $_SESSION['uitkomst4'] = opschonen($d);

  header('Location: index.php');
?>

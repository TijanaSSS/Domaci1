<?php

// uzimamo q parametar iz URL-a
$q = $_REQUEST["q"];

$hint = "";

// potražiti sve nagoveštaje iz niza ako se $q razlikuje od ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);

  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
// Ispisati "bez predloga" ako nije nađen nagoveštaj ili ispisati ispravne vrednosti
echo $hint === "" ? "no suggestion" : $hint;
?>
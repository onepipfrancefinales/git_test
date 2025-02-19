 <?php
  include "sommaireDiv.php";

  switch ($type) {
    case "seniors1":
      include "evolDivSeniors1.php";
    case "feminines":
      include "evolDivFeminines.php";
    case  "jeunes":
      include "evolDivJeunes.php";
    case "espoirs":
      include "evolDivEspoirs.php";
    case "seniors2":
      include "evolDivSeniors2.php";
  }
  ?>

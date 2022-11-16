<!-- (A) SEARCH FORM -->
<form method="post" action="search.php">
  <h1>HAE AJONEUVOA</h1>
  <input type="text" name="search" required/>
  <input type="submit" value="Search"/>
</form>

<?php

if (isset($_POST["search"])) {
  // (B1) HAE AJONEUVOA
  require "2-search.php";

  // (B2) NÄYTÄ TULOKSET
  if (count($results) > 0) { foreach ($results as $r) {
    printf("<div>%s - %s</div>", $r["merkki"], $r["malli"]);
  }} else { echo "Ei hakutuloksia"; }
}
?>

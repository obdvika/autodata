// Tämä tiedosto on otettu pois käytöstä ja korvattu uudemmalla, muokkaa.php-versiolla.

<?php
include("db-muokkaa.php");
?>

    <p><?php echo !empty($result)? $result:''; ?></p>
       <!--=== HTML Form==-->
      <form method="post" >
     
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Merkki" name="merkki" value="<?php echo $editData['merkki']; ?>">
       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Malli" name="malli" value="<?php echo $editData['malli']; ?>">
       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Valmistaja" name="valmistaja" value="<?php echo $editData['valmistaja']; ?>">
       </div>
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Valmistusmaa" name="valmistusmaa" value="<?php echo $editData['valmistusmaa']; ?>">
       </div>
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Vuosimalli" name="vuosimalli" value="<?php echo $editData['vuosimalli']; ?>">
       </div>
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Teho hevosvoimina" name="tehohv" value="<?php echo $editData['tehohv']; ?>">
       </div>
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Teho kilowatteina" name="tehokw" value="<?php echo $editData['tehokw']; ?>">
       </div>
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Sylintereiden lukumäärä" name="sylinterit" value="<?php echo $editData['sylinterit']; ?>">
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Sylinterin halkaisija" name="sylinterihalkaisija" value="<?php echo $editData['sylinterihalkaisija']; ?>">
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Iskutilavuus" name="iskutilavuus" value="<?php echo $editData['iskutilavuus']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Vetotapa" name="vetotapa" value="<?php echo $editData['vetotapa']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Paikkojen lukumäärä" name="paikkoja" value="<?php echo $editData['paikkoja']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Ovien lukumäärä" name="ovia" value="<?php echo $editData['ovia']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Tuotannon aloitusvuos" name="tuotantoalk" value="<?php echo $editData['tuotantoalk']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Tuotannon lopetusvuosi" name="tuotantolop" value="<?php echo $editData['tuotantolop']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus kaupungissa" name="polttoainekulutuskaupunki" value="<?php echo $editData['polttoainekulutuskaupunki']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus maantiellä" name="polttoainekulutusmaantie" value="<?php echo $editData['polttoainekulutusmaantie']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus-yhdistetty" name="polttoainekulutusyhdistetty" value="<?php echo $editData['polttoainekulutusyhdistetty']; ?>">
       </div>
       
               <div class="form-group">
          <input type="text" class="form-control" placeholder="Polttoaine" name="polttoaine" value="<?php echo $editData['polttoaine']; ?>">
       </div>
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Korimalli" name="korimalli" value="<?php echo $editData['korimalli']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="kiihtyvyys" name="kiihtyvyys" value="<?php echo $editData['kiihtyvyys']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Huippunopeus" name="huippunopeus" value="<?php echo $editData['huippunopeus']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Vääntö" name="vaanto" value="<?php echo $editData['vaanto']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Puristussuhde" name="puristussuhde" value="<?php echo $editData['puristussuhde']; ?>">
       </div>
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Moottori" name="moottori" value="<?php echo $editData['moottori']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Jäähdytysnesteen tilavuus" name="jaahdnestetilavuus" value="<?php echo $editData['jaahdnestetilavuus']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Paino" name="paino" value="<?php echo $editData['paino']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Enimmäispaino" name="enimpaino" value="<?php echo $editData['enimpaino']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Pituus" name="pituus" value="<?php echo $editData['pituus']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Leveys" name="leveys" value="<?php echo $editData['leveys']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Korkeus" name="korkeus" value="<?php echo $editData['korkeus']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Maavara" name="maavara" value="<?php echo $editData['maavara']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Polttoainesäiliön tilavuus" name="polttoainetilavuus" value="<?php echo $editData['polttoainetilavuus']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Etujarrut" name="etujarrut" value="<?php echo $editData['etujarrut']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Takajarrut" name="takajarrut" value="<?php echo $editData['takajarrut']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="Rengaskoko" name="rengas" value="<?php echo $editData['rengas']; ?>">
       </div>
       
                      <div class="form-group">
          <input type="text" class="form-control" placeholder="CO2-päästöt" name="co2" value="<?php echo $editData['co2']; ?>">
       </div>
       
       
       
 
  <button type="submit"  name="<?php echo empty($editData)?'save':'update'; ?>" class="btn btn-primary">Save</button>
  </form>
    <!--=== HTML Form=== -->
   </div>
   </div>
</div>

</body>
</html>

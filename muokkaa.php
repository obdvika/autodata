<?php
include("db-muokkaa.php");
require("header.php");
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet"></link>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<style>
form {
    width: 500px;
    padding: 55px;
    left: 160px;
    float: left;
    clear: both;
}
.left {
    float: left;
}
.flex, flex2 {
    display: flex;
    width: 200%;
}
.flex:After {
    content: "";
    clear: both;
    margin-left: 20px;
}


</style>

<style>
.body {
    background-color: black;
}
</style>

<body>
	

      <form method="post">
     <div class="flex">
        <div class="form-group" style="width:200%">Merkki
          <input type="text" class="form-control" placeholder="Merkki" name="merkki" value="<?php echo $editData['merkki']; ?>">
        </div>
        <div class="form-group" style="margin-left: 20px; width:100%">Malli
          <input type="text" class="form-control" placeholder="Malli" name="malli" value="<?php echo $editData['malli']; ?>">
       </div>
        <div class="form-group" style="margin-left: 20px; width:120%">Valmistaja
          <input type="text" class="form-control" placeholder="Valmistaja" name="valmistaja" value="<?php echo $editData['valmistaja']; ?>">
       </div>
       </div>
        <div class="form-group">Valmistusmaa
          <input type="text" class="form-control" placeholder="Valmistusmaa" name="valmistusmaa" value="<?php echo $editData['valmistusmaa']; ?>">

        <div class="form-group">Vuosimalli
          <input type="text" class="form-control" placeholder="Vuosimalli" name="vuosimalli" value="<?php echo $editData['vuosimalli']; ?>">
       </div>
                    </div>
<div class="form-group">Teho hevosvoimina
          <input type="text" class="form-control" placeholder="Teho hevosvoimina" name="tehohv" value="<?php echo $editData['tehohv']; ?>">
       </div>
        <div class="form-group">Teho kilowatteina
          <input type="text" class="form-control" placeholder="Teho kilowatteina" name="tehokw" value="<?php echo $editData['tehokw']; ?>">
       </div>
        <div class="form-group">Sylintereiden lukumäärä
          <input type="text" class="form-control" placeholder="Sylintereiden lukumäärä" name="sylinterit" value="<?php echo $editData['sylinterit']; ?>">
       </div>
        <div class="form-group">Sylinterin halkaisija
          <input type="text" class="form-control" placeholder="Sylinterin halkaisija" name="sylinterihalkaisija" value="<?php echo $editData['sylinterihalkaisija']; ?>">
       </div>
        <div class="form-group">Iskutilavuus
          <input type="text" class="form-control" placeholder="Iskutilavuus" name="iskutilavuus" value="<?php echo $editData['iskutilavuus']; ?>">
       </div>
        <div class="form-group">Vetotapa
          <input type="text" class="form-control" placeholder="Vetotapa" name="vetotapa" value="<?php echo $editData['vetotapa']; ?>" readonly>
               
    <label for="vetotapa">
               <select name="vetotapa" id="vetotapa"> 
                <option name="vetotapa" value="Etuveto">Etuveto</option>
                <option name="vetotapa" value="Takaveto">Takaveto</option>
                <option name="vetotapa" value="Neliveto">Neliveto</option>
                <option name="vetotapa" value="Ketjuveto">Ketjuveto</option>
                <option name="Vetotapa" value="Kardaaniveto">Kardaaniveto</option>
        </select>
</label>
       </div>
        <div class="form-group">Paikkojen lukumäärä
          <input type="text" class="form-control" placeholder="Paikkojen lukumäärä" name="paikkoja" value="<?php echo $editData['paikkoja']; ?>">
       </div>
        <div class="form-group">Ovien lukumäärä
          <input type="text" class="form-control" placeholder="Ovien lukumäärä" name="ovia" value="<?php echo $editData['ovia']; ?>">
       </div>
        <div class="form-group">Tuotannon aloitusvuosi
          <input type="text" class="form-control" placeholder="Tuotannon aloitusvuosi" name="tuotantoalk" value="<?php echo $editData['tuotantoalk']; ?>">
       </div>
        <div class="form-group">Tuotannon lopetusvuosi
          <input type="text" class="form-control" placeholder="Tuotannon lopetusvuosi" name="tuotantolop" value="<?php echo $editData['tuotantolop']; ?>">
       </div>
        <div class="form-group">Polttoaineenkulutus kaupungissa
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus kaupungissa" name="polttoainekulutuskaupunki" value="<?php echo $editData['polttoainekulutuskaupunki']; ?>">
       </div>
        <div class="form-group">Polttoaineenkulutus maantiellä
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus maantiellä" name="polttoainekulutusmaantie" value="<?php echo $editData['polttoainekulutusmaantie']; ?>">
       </div>
        <div class="form-group">Polttoaineenkulutus-yhdistetty
          <input type="text" class="form-control" placeholder="Polttoaineenkulutus-yhdistetty" name="polttoainekulutusyhdistetty" value="<?php echo $editData['polttoainekulutusyhdistetty']; ?>">
       </div>
       <div class="form-group">Polttoaine
          <input type="text" class="form-control" placeholder="Polttoaine" name="polttoaine" value="<?php echo $editData['polttoaine']; ?>" readonly>
              <label for="polttoaine">
               <select name="polttoaine" id="polttoaine"> 
                <option name="polttoaine" value="Dieselöljy">Dieselöljy</option>
                <option name="polttoaine" value="Bensiini">Bensiini</option>
                <option name="polttoaine" value="Sähköauto">Sähköauto</option>
                <option name="polttoaine" value="Hybridiauto">Hybridiauto</option>
                <option name="polttoaine" value="Kaasuauto">Kaasuauto</option>

        </select>
       </div>
       <div class="form-group">Korimalli
          <input type="text" class="form-control" placeholder="Korimalli" name="korimalli" value="<?php echo $editData['korimalli']; ?>" readonly>
                        <label for="korimalli">
               <select name="korimalli" id="korimalli"> 
                <option name="korimalli" value="Sedan (porrasperä)">Sedan (porrasperä)</option>
                <option name="korimalli" value="Hatchback (viistoperä)">Hatchback (viistoperä)</option>
                <option name="korimalli" value="Farmari">Farmari</option>
                <option name="korimalli" value="Avoauto">Avoauto</option>
                <option name="korimalli" value="Crossover (katumaasturi)">Crossover (katumaasturi)</option>
                <option name="korimalli" value="Pakettiauto">Pakettiauto</option>
                <option name="korimalli" value="Lava-auto">Lava-auto</option>

        </select>                

       </div>
       <div class="form-group">Kiihtyvyys
          <input type="text" class="form-control" placeholder="Kiihtyvyys" name="kiihtyvyys" value="<?php echo $editData['kiihtyvyys']; ?>">
       </div>
       <div class="form-group">Huippunopeus
          <input type="text" class="form-control" placeholder="Huippunopeus" name="huippunopeus" value="<?php echo $editData['huippunopeus']; ?>">
       </div>
       <div class="form-group">Vääntö
          <input type="text" class="form-control" placeholder="Vääntö" name="vaanto" value="<?php echo $editData['vaanto']; ?>">
       </div>
       <div class="form-group">Puristussuhde
          <input type="text" class="form-control" placeholder="Puristussuhde" name="puristussuhde" value="<?php echo $editData['puristussuhde']; ?>">
       </div>
       <div class="form-group">Moottori
          <input type="text" class="form-control" placeholder="Moottori" name="moottori" value="<?php echo $editData['moottori']; ?>">
       </div>
       <div class="form-group">Jäähdytysnesteen tilavuus
          <input type="text" class="form-control" placeholder="Jäähdytysnesteen tilavuus" name="jaahdnestetilavuus" value="<?php echo $editData['jaahdnestetilavuus']; ?>">
       </div>
       <div class="form-group">Paino
          <input type="text" class="form-control" placeholder="Paino" name="paino" value="<?php echo $editData['paino']; ?>">
       </div>
       <div class="form-group">Enimmäispaino
          <input type="text" class="form-control" placeholder="Enimmäispaino" name="enimpaino" value="<?php echo $editData['enimpaino']; ?>">
       </div>
       <div class="form-group">Pituus
          <input type="text" class="form-control" placeholder="pituus" name="pituus" value="<?php echo $editData['pituus']; ?>">
       </div>
       <div class="form-group">Leveys
          <input type="text" class="form-control" placeholder="Leveys" name="leveys" value="<?php echo $editData['leveys']; ?>">
       </div>
       <div class="form-group">Korkeus
          <input type="text" class="form-control" placeholder="Korkeus" name="korkeus" value="<?php echo $editData['korkeus']; ?>">
       </div>
       <div class="form-group">Maavara
          <input type="text" class="form-control" placeholder="Maavara" name="maavara" value="<?php echo $editData['maavara']; ?>">
       </div>
       <div class="form-group">Polttoainetankin tilavuus
          <input type="text" class="form-control" placeholder="Polttoainetankin tilavuus" name="polttoainetilavuus" value="<?php echo $editData['polttoainetilavuus']; ?>">
       </div>
              <div class="form-group">Etujarrut
          <input type="text" class="form-control" placeholder="Etujarrut" name="etujarrut" value="<?php echo $editData['etujarrut']; ?>">
       </div>
       <div class="form-group">Takajarrut
          <input type="text" class="form-control" placeholder="Takajarrut" name="takajarrut" value="<?php echo $editData['takajarrut']; ?>">
       </div>
       <div class="form-group">Rengaskoko
          <input type="text" class="form-control" placeholder="Rengaskoko" name="rengas" value="<?php echo $editData['rengas']; ?>">
       </div>
       <div class="form-group">CO2-päästöt
          <input type="text" class="form-control" placeholder="CO2-päästöt" name="co2" value="<?php echo $editData['co2']; ?>">
       </div>

  </div>
</div>
  <button type="submit" action="dfkdf.php" name="<?php echo empty($editData)?'save':'update'; ?>" class="btn btn-primary">Save</button>

</form>

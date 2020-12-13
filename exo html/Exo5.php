<html> 
    <head>
        <title>Cours Info1</title>
    </head>
    <body>
        <div>
          <span>Civilité :  </span>

            <label for="Mr">Mr</label>
              <input type="radio" id="Mr" name="drone" value="Mr">  
            <label for="Mme ou Mlle">Mme ou Mlle</label>
              <input type="radio" id="Mme ou Mlle" name="drone" value="Mme ou Mlle">
          </div>
            <label for="name">Nom:</label>
              <input type="text" id="name" name="name"
              minlength="4" maxlength="15" size="15">
            <p>        
            </p>
            <label for="name">Prénom :</label>
              <input type="text" id="name" name="name"
                minlength="4" maxlength="15" size="15">
            <p>    
            </p>
            <label for="Choisir-date">Date de naissance :</label>
<select name="date" id="Choisir-date">
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
</select>
    <select name="date" id="Choisir-date">
  <option value="janvier">janvier</option>
  <option value="février">février</option>
  <option value="mars">mars</option>
  <option value="avril">avril</option>
  <option value="mai">mai</option>
  <option value="juin">juin</option>
  <option value="juillet">juillet</option>
  <option value="aout">aout</option>
  <option value="septembre">septembre</option>
  <option value="octobre">octobre</option>
  <option value="novembre">novembre</option>
  <option value="décembre">décembre</option>
</select>
<label for="année">Année :</label>
  <input type="text" id="name" name="name"
    minlength="4" maxlength="15" size="15">
  <p>
  </p>
  <label for="numéro">Numéro:</label>
    <input type="text" id="numéro" name="numéro"
      minlength="2" maxlength="5" size="5">
  <label for="rue">Rue</label>
    <input type="text" id="rue" name="rue"
      minlength="4" maxlength="25" size="25">
  <p>
  </p>
    <label for="Adresse">Adresse :</label>
      <input type="text" id="adresse" name="adresse"
        minlength="4" maxlength="30" size="30">
  <p>
  </p>
  <label for="postal">Code postal:</label>
    <input type="text" id="postal" name="postal"
      minlength="2" maxlength="5" size="5">
  <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville"
      minlength="4" maxlength="25" size="25">
    <p>
    </p>
  <label for="téléphone">Téléphone:</label>
    <input type="text" id="téléphone" name="téléphone"
      minlength="4" maxlength="10" size="10">
      <p>
      </p>
      <label for="émail">E-mail:</label>
        <input type="text" id="émail" name="émail"
          minlength="4" maxlength="30" size="30">
        <p>
        </p>        
      <input type="submit" value="Envoyer" />
      <input type="reset" value="Remise a zéro" />
      <a href="../../TD_Php_Mysql/Index.php"><p>Retour</p></a>
        </body>
</html>
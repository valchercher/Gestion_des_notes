<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-outline">
  <label class="form-label" for="typeText">Voulez supprimer cette Annee</label>
  <input type="text" id="typeText" class="form-control" value="<?= $annees['annee_scolaire'];?>" />
  <input type="submit" value="Valider">
</div>
</body>
</html>
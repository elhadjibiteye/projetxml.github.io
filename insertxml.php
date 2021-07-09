<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit</title>
    <link rel="stylesheet" href="style/bootstrap-cerulean.min.css">
    
</head>
<body>
    <div style="background-color:blue;text-align:center;height:50px;margin-bottom:10px;font-size:30px;padding-top:5px;color:white;">GESTION DES PRODUITS</div>
	<br>
	<div>
		<a type="button" class="btn btn-primary" href="index.php">Retour à la liste</a>
	</div>
    <div class="container col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading" align="center">AJOUT PRODUIT</div>
            <div class="panel-body">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label class="control-label">Nom du produit</label>
                        <input class="form-control" required type="text" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Catégorie</label>
                        <input class="form-control" required type="text" name="categorie">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prix</label>
                        <input class="form-control" required type="text" name="prix">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <input class="form-control" required type="text" name="description">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control" required type="file" name="image">
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" name="insert" value="Ajouter">
                        <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>





















<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="1.0">
    <xsl:template match="/">
        <html>

            <head>
                <link type="text/css" rel="stylesheet" href="cd_produit.css"/>
                <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
            </head>
            <body>
                <div style="background-color:blue;text-align:center;height:50px;margin-bottom:10px;font-size:30px;padding-top:5px;color:white;">GESTION DES PRODUITS</div>
                
                <br/>
                <div>
                    <a type="button" class="btn btn-primary" href="index.php">Retour à la liste</a>
                </div>

                <div class="container">
                <div class="panel panel-info">
                <div class="panel-heading" align="center">MODIFICATION DU PRODUIT</div>
                  <div class="panel-body">
                    <form method="POST" action="index.php">
                        <xsl:for-each select="catalog/cd">
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
                        <input class="btn btn-success" type="submit" name="insert" value="Modifier">
                        <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                    </div>
                    </xsl:for-each>
                </form>
                </div>
            </div>
        </div>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>




















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
                
                <div align="center">
                  <a type="button" class="btn btn-primary" href="insertxml.php?action=ajout">Ajouter un nouveau produit</a>
                </div>
                
                <br/>

                <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading" align="center">LISTE DES PRODUITS</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                         <tr><th>ID</th>
                        <th>Nom</th>
                        <th>Categorie</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    <xsl:for-each select="catalog/cd">
                        <tr>
                            <td>
                                <xsl:value-of select="@id"/>
                            </td>
                            <td>
                                <xsl:value-of select="nom"/>
                            </td>
                            <td>
                                <xsl:value-of select="categorie"/>
                            </td>
                            <td>
                                <xsl:value-of select="prix"/>
                            </td>
                            <td>
                                <xsl:value-of select="description"/>
                            </td>
                            <td>
                                <xsl:for-each select="image">
                                    <img style="width:100px" align="">
                                        <xsl:attribute name="src">
                                            <xsl:value-of select="@url"/>
                                        </xsl:attribute>
                                    </img>
                                </xsl:for-each>
                            </td>
                            <td>
                                <a class="btn btn-info">
                                    <xsl:attribute name="href">
                                       editxml.php?action=modif&amp;id=<xsl:value-of select="@id"/>
                                    </xsl:attribute>
                                    Modifier</a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-danger" onClick="return confirm('Supprimer ?');">
                                    <xsl:attribute name="href">
                                        index.php?action=supp&amp;id=<xsl:value-of select="@id"/>
                                    </xsl:attribute>
                                    Supprimer</a>
                            </td>
                        </tr>
                    </xsl:for-each>
                        
                    </table>
                </div>
            </div>
        </div>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

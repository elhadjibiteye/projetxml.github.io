<?php

if(isset($_POST['insert']))
{

	$xml = new DOMDocument();
	$xml->load('cdproduit.xml');
	/*$xpath = new DOMXPATH($xml);*/
	$no=$_POST['nom'];
	$cat=$_POST['categorie'];
	$pr=$_POST['prix'];
	$des=$_POST['description'];
	$ima=$_POST['image'];
	
	$catalogTag = $xml->getElementsByTagName("catalog")->item(0);
	

$cdTag = $xml->createElement("cd");

$counter = 4;
$cdTag->setAttribute("id",  +(++$counter));
	$nomTag = $xml->createElement("nom",$no);
	$categorieTag = $xml->createElement("categorie",$cat);
	$prixTag = $xml->createElement("prix",$pr);
	$descriptionTag = $xml->createElement("description",$des);
	$imageTag = $xml->createElement("image",$ima);
	$imageTag->setAttribute("url", "images/hpelitebookg5.jpg");
	
$cdTag->appendChild($nomTag);
$cdTag->appendChild($categorieTag);
$cdTag->appendChild($prixTag);
$cdTag->appendChild($descriptionTag);
$cdTag->appendChild($imageTag);

$catalogTag->appendChild($cdTag);
$xml->save('cdproduit.xml');


}
function suppProduit($doc,$id){
	if(isset($_GET['id']))
{
	$doc = new DOMDocument(); 
	$doc->load('cdproduit.xml');

	$thedocument = $doc->documentElement;
	$id = $_GET['id'];
	$list = $thedocument->getElementsByTagName('cd');
	$nodeToRemove = null;
	foreach ($list as $domElement){
	  $attrValue = $domElement->getAttribute('id');
	  if ($attrValue == $id) {
	    $nodeToRemove = $domElement; 
	  }
	}
	if ($nodeToRemove != null)
	$thedocument->removeChild($nodeToRemove);
	 $doc->save('cdproduit.xml');
	

}
}


function afficherXml($xml, $xsl){
	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	$xslDoc = new DOMDocument();
	$xslDoc->load($xsl);

	$proc = new XSLTProcessor();
	$proc->importStyleSheet($xslDoc);
	echo $proc->transformToXML($xmlDoc);
}


function updateFile($xml){
	$xmlLoad = simplexml_load_file($xml);
	$postKeys = array_keys($_POST);

	foreach($xmlLoad->children() as $x)
	{ 
	  foreach($_POST as $key=>$value)
	  { 
		if($key == $x->attributes())
		{ 
		  $x->value = $value;
		}
	  }
	} 

	$xmlLoad->asXML($xml);
	afficherXml($xml,"updated.xsl");
}

if(!isset($_REQUEST["action"])){
  afficherXml("cdproduit.xml", "stylexsl.xsl");
}
elseif($_REQUEST["action"]== "ajout"){
  //appele fonction ajout
  //ajoutProduit("cdcatalogjs.xml");
  //afficherXml("cdcatalogjs.xml", "stylesxsl.xsl");
}
elseif($_REQUEST["action"]== "modif"){
  //appele fonction modif
  $id = $_REQUEST["id"];
  // modifProduit("cdcatalogjs.xml","formModif.xsl",$id);
  //afficherXml("cdcatalogjs.xml", "stylesxsl.xsl");
}
else {
    //appele foction supp 
    $id = $_REQUEST["id"];
    suppProduit("cdproduit.xml",$id);
    afficherXml("cdproduit.xml", "stylexsl.xsl");
    }
    
    
?>

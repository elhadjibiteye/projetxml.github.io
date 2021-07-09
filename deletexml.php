<?php
if(isset($_GET['id']))
{
$doc = new DOMDocument(); 
$doc->load('cdproduit.xml');

$thedocument = $doc->documentElement;
$id = $_GET['id'];
//this gives you a list of the messages
$list = $thedocument->getElementsByTagName('cd');

//figure out which ones you want -- assign it to a variable (ie: $nodeToRemove )
$nodeToRemove = null;
foreach ($list as $domElement){
  $attrValue = $domElement->getAttribute('id');
  if ($attrValue == $id) {

    $nodeToRemove = $domElement; 

  }

}

//Now remove it.
if ($nodeToRemove != null)
$thedocument->removeChild($nodeToRemove);

 $doc->save('cdproduit.xml');
}

?>
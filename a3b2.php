<?php
 $xml=simplexml_load_file("a3b2.xml");
  $obj=$xml->addChild("name","nudals");
  $obj->addAttribute("class","ty");
  
  echo($xml->asxml());
   
?>
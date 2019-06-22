<!DOCTYPE html>
<html>
<head>
    
    <title>Podaci</title>
</head>
<body>
    
 <?php 
            
                
	if(isset($_REQUEST['submit']))
				{
					$xml = new DOMDocument("1.0","utf-8");
					$xml->load("podaci.xml");
					
					$rootTag = $xml ->getElementsByTagName("document")->item(0);
					$dataTag=$xml->createElement("data");
					
					
					$firstTag =$xml->createElement("first",$_REQUEST["first"]);
					$lastTag =$xml->createElement("last",$_REQUEST["last"]);
					$birthTag = $xml->addChild('birth', $_POST['birth']);
					$cityTag = $xml->addChild('city', $_POST['city']);
					$mailTag = $xml->addChild('mail', $_POST['mail']);
					$phoneTag = $xml->addChild('phone', $_POST['phone']);
					
					$dataTag->appendChild($firstTag);
					$dataTag->appendChild($lastTag);
					$dataTag->appendChild($birthtTag);
					$dataTag->appendChild($cityTag);
					$dataTag->appendChild($mailTag);
					$dataTag->appendChild($phoneTag);
					
					$rootTag->appendChild($dataTag);
					$xml->save("podaci.xml");
					
				}
					
					
    
?>
           
 
    
</body>
</html>
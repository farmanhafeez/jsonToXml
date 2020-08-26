<?php

// Description: Convert JSON or Array to XML

function jsonToXml($json)
{
    // Converting json to array
    $array = json_decode($json, true);

    $xmlDoc = new DOMDocument('1.0', 'UTF-8');
    $root = $xmlDoc->appendChild($xmlDoc->createElement('root'));
    $arrayXml = function ($arrayXml, $array, $root) use ($xmlDoc) {
        foreach ($array as $key => $val) {
            if ($key == '@attributes' || $key == '__type') {
                foreach ($val as $key1 => $val1) {
                    $root->setAttribute($key1, $val1);
                }
            } else {
                $tab = $root->appendChild($xmlDoc->createElementNS(null, is_numeric($key) ? 'item' : $key));
                if (is_array($val)) {
                    $arrayXml($arrayXml, $val, $tab);
                } else {
                    $tab->appendChild($xmlDoc->createTextNode($val));
                }
            }
        }
    };
    $arrayXml($arrayXml, $array, $root);
    $xmlDoc->formatOutput = true;

    return $xmlDoc->saveXML();
}

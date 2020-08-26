<?php

header('Content-type: application/xml');

require './jsonToXml.php';

$data = '{
    "contacts": {
        "contact": {
            "@attributes": {
                "id": "1"
            },
            "name": "John Doe",
            "phone": "123-456-7890",
            "address": {
                "street": "123 JFK Street",
                "city": "Any Town",
                "state": "Any State",
                "zipCode": "12345"
            }
        }
    }
}';

echo jsonToXml($data);

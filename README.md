# jsonToXML

A lightweight simple PHP code to convert JSON or Array to XML.

## How to use

Pass your json data to `jsonToXml` function to convert into XML.

```
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
```

### Result

```
<?xml version="1.0" encoding="UTF-8"?>
<root>
    <contacts>
        <contact id="1">
            <name>John Doe</name>
            <phone>123-456-7890</phone>
            <address>
                <street>123 JFK Street</street>
                <city>Any Town</city>
                <state>Any State</state>
                <zipCode>12345</zipCode>
            </address>
        </contact>
    </contacts>
</root>
```

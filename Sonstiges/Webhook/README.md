# Webhooks

Du kannst auch im Webhook Sachen auslassen wie die fiels oder eine description etc

```php
<?php

$webhookurl = "YOUR_WEBHOOK_URL";



$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "Hello World! This is message line ;) And here is the mention, use userID <@12341234123412341>",

    // Username
    "username" => "krasin.space",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Titel
            "title" => "Titel",

            // Embed Typ
            "type" => "MESSAGE",

            // Embed Description
            "description" => "Irgend eine Beschreibung",

            // URL für den Titel
            "url" => "Link",

            // Timestamp (ISO8601)
            "timestamp" => $timestamp,

            // Embed Farbe
            "color" => hexdec( "3366ff" ),

            // Footer
            "footer" => [
                "text" => "Test",
                "icon_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=375"
            ],

            // Bild
            "image" => [
                "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=600"
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "krasin.space",
                "url" => "https://krasin.space/"
            ],

            // Fields
            "fields" => [
                // Field 1
                [
                    "name" => "Field #1 Name",
                    "value" => "Field #1 Value",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "Field #2 Name",
                    "value" => "Field #2 Value",
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// Fürs Debugen:
// echo $response;
curl_close( $ch );
```


### Credits
https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c
# SimpleForm

###### Zuerst der Import:

```php
use jojoe77777\FormAPI\SimpleForm
```

###### Api Getten:

Sie zu erstellen gibt es ein paar möglichkeiten
Diese hier ist meine

```php
$form = new SimpleForm();
```

eine function wird benötigt um euren code den ihr angibt auszuführen
```php
$form = new SimpleForm(function(Player $player, int $data = null){
//code
});
```

so muss die function aussehen
Damit könnt ihr den Spieler benutzen sowie $data, der euch den Ouput von den Buttons gibt 
d.h damit fragt ihr ab welchen button der spieler gedrückt hat
Bekannt ist das mit switch und case

###### Abfragen der werte

```php
switch($data){
    case 0:
        echo "ello bin der 1. button";
        break;
    case 1: 
        echo "ich der zweite höhö";
        break;
}
```

###### Erstellung der Buttons

Nun die Frage, wie erstellt man so ein Button? Ganz einfach wird hier $form benutzt, wo new SimpleForm gespeichert ist.
Diese Funktionen gibt es zum Beispiel:

```php
$form->addButton("Text"); //setzt ein button
$form->setTitle("Text"); //wird benötigt
$form->setContent("Text");
 //normaler text
 Siehe Bild xD 
Die Form muss noch an den Spieler gesendet werden
$form->sendToPlayer($player);
```

So sollte es aussehen

![Button Code](/Bilder/FormAPI/SimpleFormCode.png)

Doch eine Sache gibt es noch...
Was wenn der Spieler die Form schließt ohne ein Output? Deswegen hab ich in der function int `$data = null` angegeben
Also müsste man nur noch abfragen ob `$data` gleich null ist


###### Endresultat

 Die Form sollte so in der Richtung ausschauen

![Vorschau](/Bilder/FormAPI/SimpleFormVorschau.png)

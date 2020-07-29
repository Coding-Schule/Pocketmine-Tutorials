# CustomForm

###### Import:

Im prinzip ist CustomForm gleich aufgebaut wie SimpleForm
```php
use jojoe77777\FormAPI\CustomForm;
```

nur statt SimpleForm mit Customform ersetzen
```php
$form = new CustomForm(function(Player $player, $data = null){
    //code der ausgeführt wird beim benutzen
});
```

###### Erstellung der Buttons/Inputs/Sliders/Dropdowns

CustomForm hat aber mehr möglichkeiten und gibt als output eine array aus
```php
function(Player $player, array $data = null){}
```

Funktionen einer CustomForm:
```php
$form->setTitle("Form Title");
$form->addLabel("Text");
$form->addToggle("Toggle", 0/1 (#startwert auf on oder off));
$form->addSlider("text", #minimum zahl, #maximum zahl, #step);
$form->addStepSlider("Step Slider", array[]);
$form->addDropdown("Dropdown", array[]); 
$form->addInput("Fertiger Input Text", "Ghost Text", "Text");
```

Sollte am Ende so aussehen

![Code](/Bilder/CustomFormCode.png)

###### Output

der output ist bei jeder Funktion anders
`$data` ist eine array, somit ist jede funktionsozusagen nummeriert
d.h `$data[0]` wär die erste Funktion `$data[1]` die 2. usw...

Alle Funktionen geben als output was aus, diese sind nur verschieden 
Bei Input:
`$data` gibt direkt den angegebenen Text vom spieler aus.

Bei den anderen funktionen muss mit if abfragen getestet werden um zu wissen was der Spieler ausgewählt hat (auch mit switch case möglich)
Bei Toggle:
`$data[1]` gibt ein `bool (true/false)` aus

Die restlichen:
`$data[$x]` gibt als output eine zahl an, mit dem ergebnis was der spieler gedrückt hat
beispiel: 
`Dropdown` hat diese Auswahlmöglichkeiten: `["hay","hi","lol"]` oder `array("hay","hi","lol)`
```php
if(data[$x] == 0]){}
```

die `0` bei der abfrage steht für `"hay"`... 
1  dann für "hi" usw... 
damit fragt man ab was der spieler ausgwählt hat

Am Ende sieht das Ganze so aus

![Code 2](/Bilder/CustomFormCode-2.png)

###### Endresultat

Deine Form sollte am ende so aussehen

![Vorschau1](/Bilder/CustomFormVorschau.png)
![Vorschau2](/Bilder/CustomFormVorschau-2.png)

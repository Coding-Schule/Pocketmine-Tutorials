Zuerst der Import

```php
use jojoe77777\FormAPI\ModalForm
```
Im Prinzip ist es genauso wie SimpleForm, bloß mit kleine änderungen
So erstellt man die Form:
```php
$form = new SimpleForm(function(Player $player, $data = null){
//code
});
```
$data ist diesmal keiner array oder int, sondern ein boolean (true/false)
Daher fragt man sie ganz einfach mit if (auch mit switch case möglich) ab
```php 
if($data == true){
    //code
}
if($data == true){
    //code
}
```
$form->setTitle() und $form->setContent() muss ebenfals gegeben werden
Um die beiden Buttons zu sehen setzt man diese Buttons so:
```php
$form->setButton1("ja"); //der obere Button
$form->setButton2("nein); //der untere Button
```
Zuletzt nochmal an den Spieler senden
```php
$form->sendToPlayer($player);
```
Siehe die Bider zu ModalForm in der Formapi Bilder Datei, um die Unterschiede nochmal zu sehen 








Configs bieten aber noch mehr möglichkeiten als nur einen String zu speichern. Man kann auch Zahlen speichern und diese in der Config erhöhen. Legen wir los.
❌ Du must den ersten Teil bereits können oder angeschaut haben ❌

Wir können statt einem String auch eine Zahl in dee Config speichern, als Beipsiel 0:
```php
$config->set("Zahl", 0);
$config->save();
```

Wenn wir aber ein CoinSystem oder Minigame coden wollen wissen wir nicht genau wie viel der jenige in der Config bereits stehen hat. Wenn wir um 1 erhöhen möchten geht das ganz einfach:
```php
$config->get("Zahl", $config->get("Zahl") + 1);
$config->save();
```
Hierbei setzen wir die Zahl neu aber getten sie im Wert und erhöhen sie anschließend.
Das ganze geht natürlich auch mit minus, hierzu das + durch ein - tauschen.

Möchten wir aber verhindern das die Zahl nicht kleine wie 0 wird, können wir eine if anfrage verwenden. Das geht so:
```php
$wert = $config->get("Zahl");
if($wert >= 0){
//ja $wert ist größer oder gleich wie 0
} else {
//nein $wert ist kleiner als 0
}
```

War das so schwer? Nein ich denke nicht und du kannst mit dem 3. Teil loslegen.

Eine Config erstellen, so gehts:

Zuerst müssen wir Config Impotieren, das machen wir so:
```php
use pocketmine\utils\Config;
```

Im nächsten schritt erstellen wir uns eine ganz einfache config, das macht man so:
```php
$config = new Config($this->getDataFolder()."$name.yml", Config::YAML);
```

Nun haben wir unsere Config als $config definiert, nun können wir auch etwas in einer Config speichern.
Wenn wir als Beispiel einen String in der config speichern wollen, machen wir es so:
```php
$config->set("String", "Hello World");
```
„String“ ist indem fall der Name des Configseintrages und „Hello World“ das was wir im Key spechern. Nun haben wir schonmal etwas in die Config geschrieben, aber es fehlt noch das geschriebene zu speichern, das geht ganz einfach:
```php
$config->save();
```

Nun haben wir schonmal etwas fest in der config gespeichert, aber was bringt uns das wenn wir es nicht abrufen können und genau so gehts weiter, wir rufen etwas aus einer Config ab und das geht genau so:
```php
$config->get("String");
```
Beachte hier bei das die Rechtschreibung und Groß- & Kleinschreibung stimmen müssen, sonst kommt für das getten nichts heraus und das wollen wir nicht. Falls wir etwas klein schreiben obwohl es groß ist, ist es als ob es garnicht exestiert. 

Wir wollen aus irgendeinem grund den config eintrag löschen, können wir es so machen:
```php
$config->remove("String");
$config->save();
```
Auch hier ist das speichern ganz wichtig. Egal was wie ändern es muss __immer__ gespeichert werden.

Wir können statt einem String auch eine Zahl in die Config speichern, als Beipsiel 0:
```php
$config->set("Zahl", 0);
$config->save();
```

Wenn wir aber ein CoinSystem oder Minigame coden wollen wissen wir nicht genau wie viel der jenige in der Config bereits stehen hat. Wenn wir um 1 erhöhen möchten geht das ganz einfach:
```php
$config->get("Zahl", $config->get("Zahl") + 1);
$config->save();
```
Hierbei setzen wir die Zahl neu aber getten sie im Wert und erhöhen sie anschließend. Das ganze geht natürlich auch mit minus, hierzu das + durch ein - tauschen.

Möchten wir aber verhindern das die Zahl nicht kleine wie 0 wird, können wir eine if anfrage verwenden. Das geht so:
```php
$wert = $config->get("Zahl");
if($wert >= 0){
//ja $wert ist größer oder gleich wie 0
} else {
//nein $wert ist kleiner als 0
}
```
War das so schwer? Nein ich denke nicht und du kannst nun voll durchstarten.

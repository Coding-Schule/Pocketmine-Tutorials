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


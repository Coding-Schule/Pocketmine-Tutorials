Um eine einfache config zu erstellen, müssen wir erstmal die config als variable definieren, das machen wir am besten so:
```php
$name = "Ein name wie die config heißen soll, standartmäßig benutzt man nur config
$cfg = new Config($this->getDataFolder() . $name . ".yml", Config::YAML);
```


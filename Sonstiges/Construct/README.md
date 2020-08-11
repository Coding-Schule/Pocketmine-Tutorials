# construct
```php
public function __construct()
```

## Wieso benutzt man `construct`?
Man benutzt **construct** wenn man mehrere classes nutzen möchte.<br>Mit **construct** gibt man sozusagen Informationen, die diese class braucht hier ein einfaches Beispiel.<br>
Wir haben zwei Dateien einmal Main.php und einmal EventListener.php, ihr habt alle sicher mal versucht im EventListener `$this->getServer()` versucht...,
genau gibt es nicht, da diese nur in der Main aufrufbar ist.<br>
Daher der **construct**, damit gibt man sozusagen die Main an dem *EventListener* weiter das heißt:<br>
*EventListener.php*:
```php
public function __construct(Main $main){}
```

In die Klammer kommen die Argumente hin die man in der Class benötigt.
Dem entsprechend muss die Main importiert werden `use path\to\Main;`, die Main mit einer `public $Variable` speichern und die Main ist in der ganzen EventListener Class aufrufbar:
```php
$this->main->getServer()
```

## Von wo aus werden die Argumente wie `Main $main` gesendet?
von der Main wo das event registiert wird
*Main.php*:
```php
$this->getServer()->getPluginManager->registerEvents(new EventListener($this), $this);
```

*irgendeineClass.php*:
mit `new EventListener()` greift man immer auf eine andere class zu
in der klammer muss das genau das gegeben werden, was der **construct** angibt
`new EventListener($this);`

Natürlich kann man zum Beispiel einen Player senden:
*EventListener.php*:
```php
public function __construct(Main $this, Player $player){}
```

Dies muss dann ebenfalls importiert und in einer `public $Variable` gespeichert werden
*Main.php*:
```php
new EventListener($this, $player);
```

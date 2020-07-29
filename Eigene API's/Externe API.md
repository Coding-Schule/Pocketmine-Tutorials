# Eigene API

>Extern benutzen aus anderer class/plugin nutzbar

###### Was brauchst du?

Ist wie bei Intern, wird nur anders aufgerufen
Erstmal aus einer anderen Class:
In `Main.php` befindet sich die Api, und `EventListener.php` wird diese benutzt
Man benötigt ein konstrukt um auf die Main zugreifen zu können.
guckt euch oben die konstrukt geschichte an

[Konstrukt Erstellen] Folgt in Kürze

###### EventListener.php:
```php
$this->main->broadcastMessage("alloo");
```

möchte man aber von einer ganz anderen Classe auf EventListener zugreifen und im EventListener `public function broadcastMessage()` ist, dann wird das verwendet
`irgendeineClass.php`
```php
$eventclass = new EventListener(...);
$eventclass->broadcastMessage("soos");
```

###### Wie können andere Plugins drauf zugreifen

Sinn einer Api ist auch, diese aus andere Plugins aufrufen zu können
Da gibt es mehrere möglichkeiten:
- man gettet das Plugin und speichert es in  einer variable

Im anderen Plugin muss folgendes rein:
```php
$plugin = $this->getServer()->getPluginManager()->getPlugin("DeinPluginAPI");
```

`$plugin` kann man dann genauso wie `$this` nutzen (wie beim internen API zeug)
```php
$plugin->broadcastMessage("zu wild");
```

- das Prinzip aus einer anderen class kann hier auch verwendet werden... wichtig ist hier der richtige import
```php
use DeinPluginApi\EventListener;
```

```php
$plugin = new EventListener(...);
$plugin->broadcastMessage("hoho");
```

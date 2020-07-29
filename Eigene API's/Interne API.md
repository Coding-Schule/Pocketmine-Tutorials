# Eigene Api
> Intern
nur aus dem eigenen plugin nutzbar

###### Was brauchst du?

Man benötigt nur eine eigene public function auf die man überall zugreifen kann
ein einfaches beispiel wär
```php
public function broadcastMessage(string $message){
$this->getServer()->broadcastMessage($message);
}
```

Muss natürlich nicht Broadcast sein
config/Ui/abfragen usw... sind alles möglich

###### Zu Beachten

- Die Function  könnt ihr benennen wie ihr wollt (keine doppelt)
- in der klammer müssen argumente gegeben werden, die diese Funktion benötigt und damit agiert
- string/array/int/Player/... können vor der variable angegeben werden
- $message kann wie jede andere variable benutzt werden

Diese public function befindet sich in der Main
d.h. aufrufen tut man diese mit
```php
$this->broadcastMessage("hayy");
```

###### Beachten 2.0

Wichtig hier ist
- es muss genau der gleiche Name wie die Function sein die man aufruft
- das was in der klammer kommt, muss die argumente von der Funktion entsprechen (hier muss es ein string sein);
- die funktion kannst du überall in der Main aufrufen

###### Return

soll man aber einen wert zurück erhalten
```php
$playername = $this->getPlayerName($player);
```

wird am ende nur ein return benötigt
```php
public function getPlayerName(Player $player){
    $name = $player->getName()
    return $name;
}
```

der Rückgabewert wäre `$name`, den man erhält

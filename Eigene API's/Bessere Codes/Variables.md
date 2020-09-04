# Variablen

Variablen sind wie der Name schon sagt variabel (die Inhalte sind unbekannt, Namen können individuell gewählt werden)

> Name einer Variable

Hier gibt es ein paar Punkte zu beachten:

### Groß - / Kleinschreibung

Hierfür ist es empfohlen, dass sog. **Camel case** zu verwenden.

Hierbei wird jedes neue Wort mit einem Großbuchstaben begonnen. Beispiel:

```php
<?php

$player = "username";

$targetUser = "Another username";

$commandSender = "-";
```

### Sprache

Als Sprache empfiehlt es sich immer Englisch zu nutzen, da die meisten Menschen diese Sprache verstehen.

### Überlegung vor Benutzung

Codes mit vielen Variablen sind in vielen Fällen unnötig. Hier ein Beispiel, wie es **NICHT** gehen sollte:

```php
public function onCommand(Command $command, CommandSender $sender, string $label, array $args) :bool
{
    $commandName = $command->getName();
    switch ($commandName) {
        case "userinfo":
            if (isset($args[0])) {
                $targetUser = $args[0];
                if ($this->getServer()->getPlayer($targetUser) !== null) {
                    $target = $this->getServer()->getPlayer($targetUser);
                    $name = $target->getName();
                    $sender->sendMessage("Du hast $name ausgewählt!");
                }
            }
           break;
    }
    return true;
}
```

Versuche an dieser Stelle eher sowas zu machen:

```php
public function onCommand(Command $command, CommandSender $sender, string $label, array $args) :bool
{
    switch ($command->getName()) {
        case "userinfo":
            if (isset($args[0]) and ($target = $this->getServer()->getPlayer($args[0])) !== null) {
                $sender->sendMessage("Du hast " . $target->getName() . "ausgewählt!");
            }
           break;
    }
}
```

### Deklaration

Außerdem empfiehlt es sich `PHPDocs` zu verwenden falls du etwas spezielles verwendest wie z.B eigene Entities

Sie sind vor allem für IDE's wie z.B PHPStorm sehr hilfreich, können aber auch für den Nutzer von Vorteil sein.


```php
/** @var MyEntity $entity */
$entity = Entity::createEntity("MyEntity", $level, $nbt);


class MyEntity extends Entity {
    public function myFunction() {
        return null;
    }
}
```

# PHPDocs

PHPDocs sind Erklärungen der Instanzen (Objekte bzw. Klassen / Interfaces / ...) die Klassen / Funktionen / Variablen nutzen.

Sie werden oft für IDE's wie z.B PHPStorm gebraucht & genutzt, aber auch zur Verständnis von Codes

Es gibt in ihnen mehrere mögliche `@` - Parameter, hier ein paar wichtige:

`@param Objekt $variable`  -  Legt das Objekt einer Variable in z.B einer Funktion fest. 

`@return Objekt` Erläutert den Return wert (auch möglich wäre z.B `@return null|array` oder ganz unspezifisch `@return mixed`)

`@deprecated` - Markiert eine Funktion / Klasse als veraltert: sie wird vermutlich in späteren Versionen gelöscht, also nicht nutzen.

`@api` - Markiert eine Funktion als ein Teil der API.

**Wichtig:** Bei PHPDocs gibt es nicht nur `array` als Array - Spezialisierung. Man kann die einzelnen "items" auch spezialisieren mit z.B `Objekt[]` (also auch `string[]` etc)

### Beispiele:

```php

/**
 * @param Command $command
 * @param CommandSender $sender
 * @param string $label
 * @param string[] $args
 * 
 * @return bool
 */
public function onCommand(Command $command, CommandSender $sender, string $label, array $args) :bool
{ 
    return true;
}
```


```php
/**
 * Returns current money of a player saved in cache 
 *
 * @api
 *
 * @param string $player
 *
 * @return int
 */
public function getMoney(string $player) :int
{
    return $this->moneyList[$player];
}
```

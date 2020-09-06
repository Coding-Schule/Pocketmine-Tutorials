# Task

Ein einfacher RepeatingTask der unendlich weiterläuft.<br>
So wird dieser gestartet:<br>
```php
$this->getScheduler()->scheduleRepeatingTask();
```

Diese kann überall gestartet werden wo man es benötigt. *(event, command)*

Die Task datei nennen wir *Time.php*, zuerst wie gewöhnlich komme die imports
`use pocketmine\scheduler\Task;`
<br>
Die class sieht dann so aus:<br>

```php
class Time extends Task{}
```

Da man warscheinlich auf die Main zurückgreifen möchte benötigt man ein [construct](https://github.com/Coding-Schule/Pocketmine-Tutorials/tree/master/Sonstiges/Construct).<br>

```php
private $main;
public function __construct(Main $main){
    $this->main = $main;
}
```

Natürlich muss das und die Zeit beim starten des Tasks gegeben sein daher:

```php
$this->getScheduler()->scheduleRepeatingTask(new Time($this), 20);
```

Die Zahl 20 bedeutet die Anzahl der Zeit, die gezäht wird in **Ticks**
<br>*20 Ticks = 1 Sekunde*

Nun der Hauptteil vom Task:

```php
public function onRun($ticks){}
```

Hier kommt der normale Code der dann ausgeführt wird
Um zu schauen bei wie viel Sekunden man ist, müssen wir uns davor eine eigene public erstellen. Das machen wir so:
```php
public $time = 0;
```
0 wenn sich die zeit erhöht
Wenn ihr ab einem Wert anfangen wollt, könnt ihr auch den Wert eintragen müsst dann aber runter zählen ( kommt später ).

In der onRun Funktion können wir nun $time benutzen.
Eine einfache Abfrage reicht hier:
```php
public function onRun($ticks){
    if($this->time === 50){
        //wenn es bei 50 Sekunden ist
    }


    //Um nun die Zahl 0 bei $time zu erhöhen müssen wir am Ende der onRun ( bevor die onRun geschlossen wird ) $this->time++ verwenden, wenn der Wert um eins steigen soll oder $this->time—; wenn er um eins sinken soll
}
    if()...
```

Task stoppen/löschen (innerhalb einer Task):

```php
 $this->getHandler()->cancel();
```

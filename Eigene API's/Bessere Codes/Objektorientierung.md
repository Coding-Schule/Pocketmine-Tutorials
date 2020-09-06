# Objektorientierung

Objektorientierung in PHP ist ein sehr großes und breites Thema, deshalb wird hierzu nicht alles auf eine Seite kommen.

### Klassen

Klassen sind als Objekte vermutlich das wichtigste in PHP.

Sie können ganz einfach erstellt werden in dem man in eine X - beliebige neue PHP Datei
```php
class YOUR_NAME {
     // anderer content
}
```
hinzufügt. `YOUR_NAME` sollte dabei natürlich dein gewählter Name sein, es ist aber zu beachten, dass es empfohlen wird mit einem Großbuchstaben anzufangen.

### Funktionen

In gewöhnlichen PHP Dateien werden Funktionen einfach mit `function myFunction() { }` erstellt und mit `myFunction();` aufgerufen.

In der Objektorientierung wird das ein wenig anders.

Ein Beispiel hier:

```php
class Test {
    public function myFunction() {
        return 0;
    }
}

$class = new Test();

echo $class->myFunction(); // dies wird 0 ausgeben
```

Unterschieden wird zwischen `public`, `protected` und `private`.

> public | ist öffentlich erreichbar & kann von jeder anderen Klasse aufgerufen werden

> protected | ist zwar öffentlich erreichbar, aber nur für Klassen die diese Klasse auch vererben (sog. Subclasses)

> private | ist nicht öffentlich erreichbar und kann nur innerhalb der eigenen Klasse benutzt werden.

### Properties

Klassen können auch sogenannte Properties beinhalten.

Sie sind "globale" Variablen & werden nicht am Ende einer Funktion zurückgesetzt, wie wir es von normalen Variablen kennen.

Beispiel:

```php
class TestClass {
    public $speed = 2;
    
    public function getSpeed() {
        return $this->speed;  // Gibt den aktuellen Inhalt aus
    }
    
    public function setSpeed(int $speed) {
        $this->speed = $speed;  // Die Variable wird zu einem Wert verändert & bleibt damit auch so
    }
}

$class = new TestClass();

echo $class->getSpeed(); // 2 wird das Ergebnis sein

$class->setSpeed(5); // Ändert den Wert zu 5

echo $class->getSpeed(); // 5 wird das Ergebnis sein
```

Properies können genauso `public`, `protected` und `private` sein, sie verhalten sich dann genauso wie Funktionen.

### Konstanten

Konstanten sind, anders als Properties nicht mehr veränderbar aber dafür mit der Klasse direkt aufrufbar.

Man kann den Wert hier nur erhalten, im Nachhinein aber nicht mehr verändern, dazu sind Konstanten oder `const` auch nicht gedacht.

```php
class TestClass {
    const PREFIX = "Test | ";
}

echo TestClass::PREFIX . "Hallo, wie geht es dir?"; // Das Ergebnis wird "Test | Hallo, wie geht es dir?" sein
```

# Vererbung

Klassen können 1 andere Klasse vererben, mit dem `extends` Paramter beim erstellen der Klasse.

Wenn sie von dieser Klasse erben sind die Subclasses bzw. Tochterklassen dieser Klasse und erhalten Zugang zu allen `public` / `protected` Funktionen,

die auch überschrieben werden können, falls kein `final` Parameter bei der Funktion in der geerbten Klasse steht.

Erbende Klassen können `parent::` nutzen um Funktionen wie z.B den Konstruktor aus der Hauptklasse (parent class) aufzurufen.

Subclasses 

Beispiel:

```php
class ParentClass {
    protected $name = "";
    private $id = -1;
    
    public function __construct(string $name, int $id) {
      $this->name = $name;
      $this->id = $id;
    }
    // kann in Subclasses überschrieben werden
    public function myFunction() {
        return null;
    }
    
    // Kann NICHT überschrieben werden
    final public function getId() :int {
        return $this->id;
    }
}

class SubClass extends ParentClass {
    // eigener Konstruktor
    public function __construct() {
        parent::__construct("name", 123); // das muss angegeben sein, ansonsten ist der Konstruktor ungültig (muss also von dem Code entfernt werden)!! 
    }
    
    // Überschreibt die Funktion aus der parent class. Nun wird diese Funktion anstatt der oben aufgerufen.
    public function myFunction() {
        return $this->name;
    }
}

$class = new SubClass();
// die Funktion getId() kommt von der Parent class
echo $class->getId();

// die überschrieben Funktion wird "name" ausgeben
echo $class->myFunction();

// $class->name kann nicht aufgerufen werden, da es protected ist und wir nicht innerhalb einer Tochterklasse sind

```


# Abstraktheit von Klassen

Achtung, das folgende könnte Kompliziert werden & man benötigt dafür möglicherweise etwas mehr Erfahrung in php / anderen Programmiersprachen.

"Abstrakte Klassen" sind gewöhnliche Klassen, die noch nicht fertiggestellt wurden.

Sie sind meistens für Tochterklassen z.B Subclasses geschaffen, damit der Code hier individuell vervollständigt werden kann.

Abstrakte Funktionen dürfen keinen Inhalt haben, daher sehen sie auch so aus: (Semikolon am Ende)
```php
abstact public function myFunction();
```

Falls eine Klasse solche Methoden verwendet, muss diese Klasse auch als `abstract` markiert werden.

Sie kann trotzdem ganz normale Funktionen beinhalten, aber nichtmehr direkt aufgerufen werden (mit `new ClassName();`)

```php
abstract class TestClass {
    // eine abstrakte Funktion:
    abstract public function onCreate();

    // Normale Funktionen sind hier auch möglich:
    public function myFunction() {
        return null;
    }
}
```

Eine Tochterklasse, dass diese Klasse erbt **muss** in diesem Fall eine Funktion `onCreate()` haben. Beispiel:


```php
class MySubClass extends TestClass {
    public function onCreate() {
        // put the content in here
    }
}
```


Größeres Beispiel:

```php

abstract class BaseCommand
{
   /**
     * First usage check
     *
     * @api
     *
     * @param CommandSender $sender
     * 
     * @return bool
     */
   abstract public function canUse(CommandSender $sender) :bool;

 
    /**
     * Executed when the command was called
     *
     * @api
     *
     * @param CommandSender $sender
     * @param string[] $args
     * 
     * @return void
     */
    abstract public function execute(CommandSender $sender, array $args) :bool;
}

class TestCommand extends BaseCommand
{
    public function canUse(CommandSender $sender) :bool
    {
        return ($sender instanceof Player);
    }

    public function execute(CommandSender $sender, array $args) 
    {
        $sender->sendMessage('A test');
    }
}

$command = new TestCommand();

if ($command instanceof BaseCommand) {  // SubClasses nehmen auch die Instanz ihrer parent class an
    if ($command->canUse($sender)) $command->execute($sender, $args);
} 
```

_More will follow soon_

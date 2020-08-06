So könnt ihr einen eigenen command erstellen, der einen anderen prefix als / hat. Den Prefix könnt ihr dann ganz einfach einstellen in dem ihr entweder an `private $prefix` rumschraubt oder den wert über `$this->prefix = ""` ändert.

```php
private $prefix = "#";

public function onChat(PlayerChatEvent $event)
{
     $msg = $event->getMessage();
     if ($msg[0] === $this->prefix){
            $this->command(explode(' ', str_replace($this->prefix, "", $msg)), $sender);
     }
}

public function command(array $args, Player $sender)
{
     // Jetzt ist alles gleich, nur $args[0] ist der command. xd
    if ($args[0] === "test") {
         // Nun euer command, das erste cmd argument ist $args[1], hgw.
    } else {
          // Also, da es ein neuer Prefix ist, braucht man natürlich auch ne message, sollte es den command nicht geben!
       $sender->sendMessage("§cUnbekannter Befehl!");
    }
}
```
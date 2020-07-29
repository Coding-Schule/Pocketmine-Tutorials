//am anfang legen wir eine permission fest die wir über den ganzen code verteilt entweder hinzufügen, wegnehmen oder abfragen

$permission = "TestPermission.cmd";

//permission einem spieler hinzufügen

$player->addAttachment($this)->setPermission($permission, true);
//mit true geben wir an, das wir eine permission setzen wollen
//$player wäre in diesem falle der spieler der Beispielsweise den command benutzt.

//permission einem spieler entfernen

$player->addAttachment($this)->setPermission($permission, false);
//mit false sagen wir das dieses Attachment nicht wie bei true hinzugefügt werden soll sondern entfernt werden soll
//$player wäre in diesem falle der spieler der Beispielsweise den command benutzt.

//permission abfragen

if($player->hasPermission($permission){
//ein spieler hat die Permission
} else {
//ein spieler hat die Permission nicht
}

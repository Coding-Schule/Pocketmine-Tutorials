# Custom Crafting Recipe

So erstellt man ein **CustomCraftinRecipe**. *(am besten im onEnable Registrieren)*
```php
$neuesitem = new ShapedRecipe(["positionen"], ["position mit item definieren"], ["output"]);

["abc","def","ghi"]
```
Damit können wir festlegen welches Item da hin gehört. *["zeile1","zeile2","zeile3"]* <br>
In der jeweiligen Zeile sind nur noch die 3 Slots die mit Buchstaben versetzt werden "abc"
Danach definiert man welche Position zu welchem Item gehört.
```php
$neuesitem = new ShapedRecipe(
["abc","def","ghi"],
[
"a" => Item::get(41,0,1),
"b" => Item::get(57,0,1),
"c" => Item::get(41,0,1),
"d" => Item::get(57,0,1),
"e" => Item::get(130,0,1),
"f" => Item::get(57,0,1),
"g" => Item::get(41,0,1),
"h" => Item::get(57,0,1),
"i" => Item::get(41,0,1)
],
[Item::get(130,0,1)->setCustomName("§r§6mobile Endertruhe")->setLore(["§r§l§6mobile Endertruhe"])]);
```
Zuletzt setzt man noch, das item, was gecraftet werden soll *(output)* nur noch registrieren:
```php
$this->getServer()->getCraftingManager()->registerRecipe($neuesitem);
```

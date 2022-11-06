(pracovní verze)

Test report projektu týmu SSG
===============

 **Informace o projektu**

 - Aplikace pro prohlížení, sběr příspěvků a administraci recenzního řízení odborného a vědeckého časopisu

 **Přidělený tým**

 - bukovsky, JKalina08, JKarmasin, makovem, pospisilova

Cíle testování
---------------

 - Provedená testování:
     - regrese
        - vlastnost / funkcionalita
        - integrace
     - performance & load
     - unit testy - nebo jakékoli provádění testů na straně vývojáře

  _Například regresní testování nové funkce. Cílem testů jednotek je zajištění, aby každá kontrola kódu prošla sadou testů jednotek - což značí, že hlavní funkce fungují podle očekávání._

 **Podrobnosti o provádění testů**

 - Název testů nebo sad testů
 - Umístění testů, sad testů

 **Výsledky provádění testů**

 - počet testů podle typu
 - PASSED - vyhověl
 - FAILED - neúspěšné
 - SKIPPED - vynecháno
 - uživatel nebo tým, který provedl testy, na jakém serveru a v jakém termínu (termínech)
 - číslo a popis závady pro všechny závady zadané z testovacího úsilí

 **Pokrytí testů**

 - grafické znázornění řádků testovaného kódu v porovnání s řádky kódu v aplikaci
 _Informace, které čtenáři poskytnou lepší představu o tom, co je testováním pokryto._

 **Shrnutí testů**
 - shrnutí provedených testů, výsledků a zadaných závad
 _Čte se jako technický výtah - poskytuje základní informace bez explicitních detailů._


Test report - Sprint 1
---------------

### Test připravenosti prostředí LAMP

 - instalace Apache, PHP, MySQL, Docker na platfmorě Linux - PASSED
     - 2022-10-22, MakovyPanacek - OK
 - běh Apache, MySQL, PHP bez chybových hlášení - PASSED
     - 2022-10-22, MakovyPanacek - OK
 - kontrola uživatelských oprávnění, dostupnosti a velikosti úložiště - PASSED
     - 2022-10-22, MakovyPanacek - OK
 - ověření funkcionality PHP, výkonnosti databáze - PASSED
     - 2022-10-22, MakovyPanacek - OK

### Přihlašování uživatele

 - přihlašování uživatele

### Autor - Nabídnutí článku

 - nabídnutí článku

### Redaktor - Přijetí článku

 - přijetí článku

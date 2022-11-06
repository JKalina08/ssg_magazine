## Dokumentace k backendové části

(1.a) Index.php  
* první zobrazená webová stránka. Obsahuje logo projektu a formulář k přihlášení. Čtenář bez přihlašovacích údajů může vstoupit na stránky jako návštěvník pouze k čtení článků.
* Zde se vyplňuje formulář prihlašovacími údaji, který se metodou POST posílá do login.php
*  __TODO: povinná lištza s infem o tom, že se jedná pouze o školní projekt__

(1.b) login.php
* BE script pro komunikaci s datábází metodou POST získává údaje z formuláře, vytváří SQL dotaz a zpracovává jeho výsledek
* spouští webovou SESSION

(1.c) db_conn.php
* krátký script pro navázání komunikace s databází. 
* Obsahuje přihlůašovací údaje do databáze

(1.d) login-guest.php
* script pro přihlášení jako čtenář
* nekomunikuje s databází

(1.e) logout.php
* php script volaný při odhlášení
* ukončuje SESSION a vrací prohlížeč na __index.php__

(1.f) protection.php
* kontroluje, zda je v coučasné SESSION přihlášený legitimní uživatel pro zobrazení interních dat

- - -
(2.a) home.php
* Hlavní webová prezentace dat na stránce
* Formou tabulky prezentuje relevantní články pro právě přihlášeného uživatele
* redaktor vidí všechny články
* pomocí ovládacích prvkůl může s daným článkem v řádu vykonávat požadovanou akci - ta se provede až po stisku tlačítka "Potvrď" na konci daného řádku.
* pro jiné uživatele jsou skryté sloupce, které se uživatele přímo netýkají. Například recenzet 1 nemá vidět recenzní posudek druhého recenzenta, ani kdo je autorem článku pro zachování objektivity.
* V horní části jsou ovládací tlačítka pro odhlášení, přidáýní nového uživatele a podobně. Ty jsou též zobrazovány pouze v závisloti na roli, která je právě přihlášena. Redaktor a šéf redaktor může přidávat nové autory a recenzenty. Pouze autor může přidávat nový článek.
  
(2.b) newArticle_a.php
* fontend pro přidání nového článku
* zobrazuje webovou stránku s formulářem pro zadání potřebných dat k novému článku a výběr .pdf nebo .docx souboru

(2.c) newArticle_b.php
* zpracovává data z formuláře newArticle_a.php a pomocí SQL dotazu je zapisuje do databáze. V ní je uložen název dokumentu.
* Samotný dokument je uploadován na server a ložen ve složce __res__
* předání dat z formuláře probíhá metodou POST

(2.d) newUser_a.php
* fontend pro přidání nového autora nebo recenzenta
* zobrazuje webovou stránku s formulářem pro zadání potřebných dat k novému uživateli

(2.e) newUser_b.php
* zpracovává data z formuláře newUser_a.php a pomocí SQL dotazu je zapisuje do databáze.
* předání dat z formuláře probíhá metodou POST

(2.d) showFile.php
* zobrazuje požadovaný dokument z filesystemu serveru v novém tabu prohlížeče
  
- - -
### TODO:
* newReview_a
* newReview_b
* showReview
* ...


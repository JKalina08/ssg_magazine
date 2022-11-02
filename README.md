![](imgs/vspjLogo.png "VSPJ")
# Řízení Sowtwarových Projektů - RSP

**Team SSG**

Aplikace pro prohlížení, sběr příspěvků a administraci recenzního řízení
odborného a vědeckého časopisu

## Struktura projektu: 
```bash 
.
├── .db/                  # Zde si MySQL kontajner uklada data
├── .git/                 # Slozka verz. systemu GIT - zaznamy o verzovani
├── diagrams/             # ER modely "draw.io"
├── docs/                 # Dokumenty 
├── imgs/                 # Obrazky pro dokumenty
├── sqldb/                # Zakladaci skripty databaze            
├── www/                  # !! Slozka s projektem, odtud Apache nacita WWW !!
├── .gitignore            # Soubor s vyctem polozek ktere ma GIT ignorovat
├── Dockerfile            # Instrukce pro sestaveni Apache s PHP image
├── README.md             # Informace o projektu
├── clean.sh              # Vyzaduje Docker     
├── docker-compose.yml    # Instrukce k sestaveni kont. stacku Apache-Db-Admin
├── entrypoint.sh         # Instrukce Docker postinstalace DB
└── vhost.conf            # Konfigurace Apache serveru
```

## Instalace a zprovoznění
Předpokladem je OS Windows 10 nebo 11.  
Nainstalovat aplikaci  [Docker](https://docs.docker.com/desktop/install/windows-install/).  
Nainstalovat IDE [VS Code](https://code.visualstudio.com/download) pro Windows.  
.. TODO


## Požadované řešení:  

Výše popsané procesy by měly být implementovány tak, aby odpadla stávající e-mailová komunikace
a všechny dokumenty, termíny, úkoly, komunikace i poznámky by byly bezpečně archivovány
v centrální databázi. Kromě toho jsou požadovány následující funkčnosti:  

* Každý autor, recenzent, redaktor i člen redakční rady musí mít vlastní bezpečný přihlašovací
profil, který může editovat.  

### Autor po přihlášení:

* Zadá název příspěvku, kontaktní údaje kompletního autorského týmu a plný text
příspěvku ve formátu pdf nebo doc(x). Všechny verze textů, které autor redakci zaslal,
zůstávají zachovány v systému včetně souvisejících doplňujících informací. Příjemná by
byla možnost doslovného textového srovnání jednotlivých verzí příspěvku (původní, po
revizi).
o Bude průběžně informován o aktuální fázi recenzního řízení (podáno, vráceno z důvodu
tematické nevhodnosti, předáno recenzentům, zamítnuto, přijato s výhradami, čeká na
dodatečné opravy ze strany autora, čeká na dodatečné vyjádření ze strany recenzenta,
čeká na vyjádření šéfredaktora, přijato).
  * Má možnost výběru tematického čísla časopisu. Přitom se zároveň dozví, jaký je o něj
aktuální zájem, tj. zná celkový počet příspěvků v recenzním řízení a kapacitu výtisku.
  * V případě nesouhlasu se závěry oponenta může redaktorovi poslat své námitky, vepsané
do oponentního formuláře.  

### Redaktor po přihlášení:

* Je informován o stavu každého příspěvku - např. nově podaný, čeká na stanovení
recenzentů, recenzní řízení probíhá a bude ukončeno 31. 10. 2020, posudek 1 doručen
redakci, posudek 2 doručen redakci, posudky odeslány autorovi, probíhá úprava textu
autorem, příspěvek je přijat k vydání nebo příspěvek zamítnut.
  * Informuje autora o stavu příspěvku (zamítnutý, k formálnímu doplnění, odeslaný do
recenzního řízení, přijatý apod.).
  * Volí recenzenty a pošle jim článek společně s termínem vypracování posudku.
  * Zpřístupní posudky recenzentů autorovi.
  * Má dostupnou evidenci všech probíhajících úkolů a termínů. Zvolené termíny jsou
automaticky hlídané a jimi dotčené role jsou s třídenním předstihem notifikovány.
  * V případě potřeby kontroluje realizaci drobných změn autory, respektive doplnění
zásadnějších informací ve spolupráci s recenzenty. K nim se korigovaný příspěvek
dostane nejvýše jednou.
  * Administrativně zajištuje veškeré problematické situace mezi autory a oponenty.
  * Předává zdrojové texty časopisu nakladatelství.  

# Recenzent:

* Recenzent po přihlášení prostuduje redaktorem předělený příspěvek, vyplní a odešle recenzní
formulář, obsahující kromě identifikátorů autora a článku následující kategoriální údaje:
  * aktuálnost, zajímavost a přínosnost
  * originalita
  * odborná úroveň
  * jazyková a stylistická úroveň  

ve stupnici 1 (nejlepší) až 5 (nejhorší). Kromě toho musí recenzní formulář obsahovat textové
pole na otevřenou odpověď a datum recenze.  

# Šéfredaktor:

* Šéfredaktor po přihlášení vidí veškerou agendu autora, redaktora i recenzentů. Změny v ní ale
samostatně provádět nesmí. Má ale možnost je písemně formulovat, například formou jmenných
úkolů a vyžadovat jejich plnění k danému termínu.   

# Čtenář:

* Čtenář se nemusí přihlašovat a vidí pouze veřejně dostupné informace.  

# Administrátor:

* Administrátor po přihlášení může kompletně spravovat celou aplikaci. Bylo by vhodné, aby měl
za tím účelem vlastní rozhraní.  

# Další požadavky:

* a) Kromě popsaných funkčností by bylo vhodné, aby kromě přidávání, mazání a prohlížení bylo
možné jednotlivé záznamy také řadit, filtrovat, vyhledávat a počítat jejich souhrny.  
* b) Aplikace by dále měla obsahovat HelpDesk, na který bude možné zasílat související dotazy. Dále
by měla mít intuitivní ovládání, měla by být opatřena on-line návodem a ideálně i kontextovými
nápovědami.  
* c) K celému řešení musí existovat dostatečná uživatelská i administrátorská dokumentace. Zdrojové
texty musí být srozumitelné, řádně komentované a splňující běžné standardy SWI.  
* d) Aplikace může být implementována buď jako webová nebo lokální. Vždy ale musí být bez jakékoli
instalace přístupná pro sponzora projektu (vyučujícího) i oponentní tým.

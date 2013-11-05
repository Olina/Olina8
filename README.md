Olina8
=========================

Krav k1: Installera från GitHub
---------------

Du kan ladda ner Olina från GitHub. 
Det gör du med hjälp av följande komando:
git clone git://github.com/Olina/Olina8.git


Installation
---------------

1: Först måste du göra data-katalogen skrivbar. 
Detta är platsen där Olina8 måste kunna skriva och skapa filer. 
Du gör det med desssa komandon:
cd Olina8
chmod 777 site/data

2: Sedan måste du gå in i filen .htaccess och ändra koden ~lijc13/phpmvc/Olina8/ 
till den sökvägen du angett på din server.

3: Initiera moduler i Olina8:

Peka din webbläsare till din Olina8 och sedan tryck på länken: 

"modul/install" på sidan.


Krav k3: Ett anpassningsbart ramverk
---------------

<h3>Ändra färger</h3>
1.I gå till site/themes/mytheme/ där kan du öppna style.css där kan du ändra färger och annat.

<h3>Ändra logga,titel,footer och nav-meny</h3>

För att ändra detta så går man in i filen site/config.php.

Navigerivngsmenyn: 
---------------
Leta upp "$olina->config['menus'] = array("
sedan ändrar du i "'my-navbar' => array(" .

Footer & titel: 
---------------
Leta upp "$olina->config['theme'] = array(" i koden,
där ändrar du i "'data'=>array(" 
där det är "header", för att ändra titeln, och "footer" för ändring i footern.


3. Skapa en blogg.
---------------
Logga in (login högst upp i högra härnet)
genom att ange antingen root/root eller doe/doe eller väljer att skapa en ny användare på "create user".
Gå in i "content" och "create new content" för att skapa ett blogginlägg så anger du "post" i "Type".
och i "Filter" BBCode eller HTMLPurifier eller plain för vanlig text.

4. Skapa en sida.
---------------

För att skapa en page så gör du samma sak som ovan förutom att välja typen page istället för post. 


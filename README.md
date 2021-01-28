### SYMFONY PROJECT - shortcut info to easily get back to basics.

## SETTINGS:

- .env with DATABASE URL required : DATABASE_URL="mysql://root:@127.0.0.1:3306/budget2"

## MAIN TIPS:

used and what for:
//composer require annotations + doctrine/annotations + doctrine(orm) - to make:controller, db connection and routing working well.  
//composer require dump - to get var_dump in symfony way  
//composer require template - for templating views.  
//composer require form validator - for post and forms.  
//composer require symfony/web-profiler-bundle -to see requests

other stuff:
//symfony server:start for 5.2 to start a web server and get acces via localhost no htdocs.
//symfony console debug:router - to see all of the routes

## STEP1 - make controller:

symfony console make:controller MainController
...create MainController as required.

## STEP2 - create views as per mvc model requirements

use base.html as a main layout

## STEP 3 - createing entity

class to represent a table.
'symfony console doctrine:schema:create' and then 'symfony console doctrine:schema:update' or use update --force to create.

## STEP 4 - create a post method

class to represent a post type. connected to entity!

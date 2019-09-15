# E-Medics 


### How to run
to get this up and running:
- make a new user of phpmyadmin : root:password
- create a new table called "projet"
- add tables to the db: 

    $ php artisan migrate 
    
- add voyager new admin: 

    $ php artisan voyager:admin mail@of.admin --create
    
if it didnt work, run the following commands:

    $ php artisan db:seed --class=DataTypesTableSeeder

    $ php artisan db:seed --class=DataRowsTableSeeder

    $ php artisan db:seed --class=MenusTableSeeder

    $ php artisan db:seed --class=MenuItemsTableSeeder

    $ php artisan db:seed --class=RolesTableSeeder

    $ php artisan db:seed --class=PermissionsTableSeeder

    $ php artisan db:seed --class=PermissionRoleTableSeeder

### What's working
So far, this is what works:
    - registration
    - login
    - homepage
    - profile 
    - check cours/cas clinique or add one if youre an institor
    - admin panel
    - the admin is in /admin/login


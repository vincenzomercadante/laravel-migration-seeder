# LARAVEL-MIGRATION-SEEDER

## TRACCIA 

Creiamo una tabella trains tramite la relativa Migration

Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto 

Inserite inizialmente i dati tramite PhpMyAdmin.

Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

### Bonus
Create una seconda migration per aggiungere/modificare una colonna della tabella


## RUN THE CODE
If you want to run this code you have to:
- clone the repository
- once you have cloned the repository type in terminal
    - FRONT END

    ```
        npm i
        npm run dev
    ```
    - BACK END

    ```
        open mamp
        composer i
        php artisan key:generate
        php artisan serve
        open phpmyadmin
        create db 'laravel_migration_seeder'
        php artisan migrate
    ```

    
# pokedex-2018-honeybadgers

### Database Setup

Step 1: Create database

Using the database manager of your choice, create a database called 'pokedex_hb'.

Step 2: Create table

Then run 'sql/pokedex_2018-11-12.sql' in the database manager.  
This will create the pokemon table.

Step 3: Populate pokemon table

Open your terminal and navigate to 'pokedex-2018-honeybadgers' and run 'php -f dataScrape/apiPull.php'.  
This will add 151 pokemon to the table.
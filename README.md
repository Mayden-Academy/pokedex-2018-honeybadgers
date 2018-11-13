# pokedex-2018-honeybadgers

### Database Setup

Step 1: Set database IP address

In 'dataScrape/apiPull.php', line 7, where pokemonTableUpdate is instantiated, change the second argument to the IP address of your database.

Step 2: Create database

Using the database manager of your choice, create a database called 'pokedex_hb'.

Step 3: Create table

Then run 'sql/pokedex_2018-11-12.sql' in the database manager.  
This will create the pokemon table.

Step 4: Populate pokemon table

Open your terminal and navigate to 'pokedex-2018-honeybadgers' and run 'php -f dataScrape/apiPull.php'.  
This will add 151 pokemon to the table.
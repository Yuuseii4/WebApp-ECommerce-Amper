Overview of the Project
This project is ecommerce where you can add, edit and delete the items that you want
Name: Mark Anthony Amper
USN: 22012212810
Program: BSIT

SETUP
First is to install the XAMPP v3.3.0 and once you downloaded it, start the apache and mysql servers using the control panel
Second is to create a new folder inside the htdocs 
Last is to open the visual studio code to place all the files such as database.php, index.php, form.php, edit.php, and update.php

DATABASE SCHEMA
Open your google chrome or click the admin (beside mysql) in the control panel in xampp. once you click it, it wil automatically redirect you in the http://localhost/phpmyadmin 
Once you open the localhost/phpmyadmin, Create a new database named "yourshop"
Create a table named items. The items table consists of four columns such as id, name, description and price

FILE STRUCTURE
database.php: Handles the database connection.
index.php: Displays the list of items with options to add, edit, and delete.
form.php: Provides a form to add new items.
edit.php: Provides a form to edit existing items.
update.php: Handles the update of items in the database.
delete.php: Handles the deletion of items from the database.

FUNCTIONALITY
form.php - Displays a form to add a new item. On form submission, inserts the new item into the items table.
edit.php - Displays a form to edit an existing item. Pre-fills the form with the current item data. On form submission, updates the item in the items table.
update.php - Processes the update form submission. Updates the item in the items table with the new data.
index.php / delete.php - Deletes an item from the items table. Provides a delete link for each item.

HOW TO USE
This is simple site that allows you to add, edit and delete. How to add? - Click the "Add New Item" in the upper table
How to edit? - Click the edit beside the price table, once you click it you gonna saw the name item, description and price just fill it
How to delete? - Besides in the edit, it has a button called delete, click the item that you want to delete 

SCREENSHOTS
![image](https://github.com/user-attachments/assets/f62fddd8-cf07-4e3a-b7ca-f41e1f796d43)
![image](https://github.com/user-attachments/assets/9144f602-e271-4fd4-8820-faeb649ed1a7)
![image](https://github.com/user-attachments/assets/03a67a06-7c38-4dfe-a08b-ec26f8651b98)
![image](https://github.com/user-attachments/assets/22647feb-6988-4b10-88de-16980835faa2)





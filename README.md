# php_navbar
This is my pet project - dynamic navigation bar template.

You can use this repository as a dynamic navigation bar template.
This template should include a database with category tables.
With this template you can easily change the pages displayed in your navigation bar.
Just add/remove/rename categories in your table, they will automatically appear on the page.

In scripts/get_page.php you should assign a value to each redirect by category id.

Table structure:
CREATE TABLE categories
(
id INT AUTO_INCREMENT NOT NULL,
cat_name VARCHAR(255) NOT NULL,
PRIMARY KEY(id)
);

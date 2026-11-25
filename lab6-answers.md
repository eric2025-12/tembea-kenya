# Lab 6 Answers

### 1. Why does PHP validate form data even when the browser already checks it?
PHP validates form data because browser validation can be bypassed. Server-side validation ensures that the information is checked again before it is saved in the database.

### 2. What do the letters in `bind_param('issd', ...)` represent?
he letters represent the data types of values being sent to the database. i means integer, s means string, d means double and b means binary data. They must match the order of the variables supplied.

### 3. Why is Delete implemented using a POST form while Edit uses a link?
Edit uses a link because it only opens the page containing the existing information. Delete uses a POST form because it changes the database by removing a record. POST helps prevent accidental deletion through a simple link.

### 4. What happens if someone enters `?date=' OR '1'='1` in the URL, and why does a prepared statement prevent SQL injection?
The attacker is attempting to manipulate the SQL query to access unintended records. A prepared statement prevents this by treating the entered value as data rather than SQL code. This protects the database from SQL injection.
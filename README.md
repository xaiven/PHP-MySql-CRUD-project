# php1
Hello, this is project for SMARTI exam.

To install the project use the following steps:

1.Import db/employees.db file into your PhpMyAdmin page or create the database table by yourself:

CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
);

2. Turn on APACHE and MySQL modules in your XAMPP program.

3. Put the "php1" folder into "xampp/htdocs" folder

4. Run the "localhost:8000/php1/index.php" in tour browser. (* instead of 8000 use your apache port)


Good luck!

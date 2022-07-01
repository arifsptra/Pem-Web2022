# Pemrograman Web Lanjut

**Nama : Arif Saputra**
**NIM : A11.2021.13480**
Universitas Dian Nuswantoro Semarang

## Material of Week 1

_Thursday, March 10, 2022_

- Lecture Contract
- Dynamic Website, Contains information and content that changes and site content (text/images) is stored in the database.
- Static Website, Displays content in a web browser exactly as it is stored in the script and contains web pages with fixed content encoded in HTML and stored on a web server
- Client Side Scripting, Scripts that run from the client side.
- Server Side Scripting, Scripts that are run from the server side.
- PHP introduction
- PHP History
- PHP Characteristics:
  - Used in conjunction with HTML
  - Syntax follows <b>C</b> bahasa language
  - PHP scripts can be placed anywhere in the web document
  - PHP script starts with delimiter <b><?php</b> and ends with <b>?</b>
  - The default PHP file extension is <b>.php"</b>
  - PHP statements end with a semicolon <b>;</b>
  - Variable naming in PHP is case sensitive
- Output Command
  - <b>print</b>: Prints data on the screen , has a return value of 1, only has 1 parameter.
  - <b>echo</b>: Prints data on screen , no return value, has many parameters
  - <b>print_r</b>: Prints / knows the contents of the array or object (class)
  - <b>var_dump()</b>: Prints and displays information on a variable value (data type and data length)
- Comments
- Variable
  - Local Variable
  - Global Variable
  - Static Variable
- Tipe Data
  - String
  - Integer
  - Float
  - Boolean
  - Array
  - Object
  - NULL
  - Resource
- Constant, an identifier that holds data that is fixed (cannot be changed)

## Material of Week 2

_Thursday, March 17, 2022_

- Operators are used to <b>perform operations</b> on <b>variables</b> and <b>values</b>:
  - Arithmetic operators
  - Assignment operators
  - Comparison operators
  - Increment/Decrement operators
  - Logical operators
  - String operators
  - Array operators
  - Conditional assignment operators
- Control Structure
  - <b>Conditional</b>
    - if
    - if else
    - if else if
  - <b>Loop</b>
    - while
    - do while
    - for
    - foreach
    - break
    - continue

## Material of Week 3

_Thursday, March 24, 2022_

- Function is a <b>block of statements</b> that <b>can be used repeatedly in a program</b>.
- Function type:
  - <b>User Defined Functions</b>
    - pass-by-value
    - pass-by-reference
  - <b>Built-in function</b> (PHP has <b>more than 1000</b> built-in function)
    - string
    - math
    - date
    - array
    - etc

## Material of Week 4

_Friday, March 25, 2022_

- Data Handling: use the form to <b>get data from the user</b>
- <b>Important elements</b> of the form
  - <b>METHOD</b>: Determine how the form input data is sent. To determine how the input data is sent and processed by the PHP method, there are two kinds:
    - <b>GET</b>: Array variable passed to current script via URL parameter
    - <b>POST</b>: Array variable passed to current script via HTTP POST method
  - <b>ACTION</b>: Determines where the input data from the form is processed, if this action is left blank, then the form process occurs on the same page, so the form page and the processing page can be separated or combined.
  - <b>SUBMIT BUTTON</b>: As a trigger for sending data from the input form
- The data on the form can be <b>processed</b>
  - form and process <b>into one</b>
  - <b>separate</b> form and process
- Sending data <b>between</b> web pages
  - <b>stateless http</b> is a connection protocol between the client and server that will be disconnected automatically every time a transaction occurs <b>(request-response)</b>.
  - http is stateless which means that one request is independent of other requests, no state <b>(variable/data)</b> is maintained, thus making one web page unfamiliar with each other's variables/data.
  - the way to <b>overcome</b> stateless http is to:
    - <b>message passing via url/form</b>
    - <b>cookies</b>
      - cookies or http cookies, web cookies, or browser cookies are data or information created by a website to be stored in a web browser, when a user is browsing that website.
      - cookie size is less than 100 bytes, a server can only store approximately 20 cookies in the user's browser, where each cookie is only 4 KB in size.
    - <b>session</b>
      - session allows web pages to store a variable value on the server.
      - session commands:
        - Session_start
        - $\_SESSION["username"]
        - unset($\_SESSION["username"])
        - session_destroy()

## Material of Week 5

_Thursday, March 31, 2022_

- Working on case studies using <b>session</b> variables
- Shopping cart process using <b>session-array</b>
  - <b>Show</b> Product List
  - <b>Selecting</b> a product and adding it in the Sessions array
  - <b>Delete</b> all items in the array
- <b>Improve program display</b>

## Material of Week 6

_Thursday, April 7, 2022_

- MySQL is a standard <b>database system</b> that is widely used for websites that have large volumes of data and many users, ex: Facebook, Wikipedia, Tokopedia, etc.
- MySQL can also be scaled down to support <b>database-embeded applications</b>.
- Database -> <b>Media accommodates</b> the data of an agency managed using <b>DBMS software</b>, ex: MySQL, PostgreSQL, MS. Acess, etc.
- With the <b>database</b> we can:
  - <b>create</b> database -> used to create a database
  - <b>drop</b> database -> used to delete a database
- With the <b>table</b> we can:
  - <b>create</b> table -> used to create tables in the database
  - <b>alter</b> table -> used to modify the table that was created
  - <b>drop</b> table -> used to drop tables in the database
- with the <b>MySQL</b> we can:
  - <b>insert</b> -> used to insert data into a table
  - <b>select</b> -> used to retrieve data from a table
  - <b>delete</b> -> used to delete a record from a table
  - <b>update</b> -> used to update the value of a data
- <b>PHP version-5</b> and above can work with MySQL databases using:
  - <b>MySQLi</b> ("i" : improved)
  - <b>PDO</b> (PHP Data Objects)
- <b>PDO vs MySQL</b>
  - PDO can access <b>12</b> database systems, while MySQLi can only access <b>1</b> database, namely MySQL.
  - PDO is used when it is necessary to perform a database <b>replacement on a project</b>. because it only needs to change the connection string and a few statements.
  - However, if you use MySQLi to <b>change to another</b> database, then a lot of code and queries must be rewritten. PDO and MySQLi are <b>object-oriented</b> programming, but MySQLi can also be used <b>procedurally</b>.
  - Both support <b>Prepared-Statements</b>. Prepared-Statements are used to protect the web from <b>SQL-injection</b>, which is very important for web application security.

## Material of Week 7

_Thursday, April 14, 2022_

- Working on <b>CRUD-Database</b> case studies
- CRUD process:
  - <b>Add data</b> from Form into Table in database
  - <b>Displaying data</b> from a table (database) to a web page
  - Perform the process of <b>updating data</b> (Update, Delete)

## Midterm Exam

_Thursday, April 19, 2022_

- Create a web application that is used by farmers to sell their agricultural products, look for reliable sources of information through articles that are already available on the website, and in the future farmers can consult with experts in the field of agriculture or communities in the field of agriculture.

## Material of Week 8

_Thursday, May 12, 2022_

- <b>Object-Based Programming</b> or <b>Object Oriented Programming (OOP)</b> is a procedure for making programs (programming paradigms) using the concept of "objects" which have data (attributes that describe objects) and procedures (functions) known as methods.
- Excess:
  - Faster and easier to execute
  - Help keep program code to be <b>DRY-CODE</b> (Don't Repeat Yourself)
  - Makes code easier to modify and debug
  - Makes application development reusable with less code and shorter development time
- A class is a collection of variables and the functions that work with those variables.
- Function:
  - <b>\_\_construct()</b> => initializes object properties when object creation is performed
  - <b>\_\_destruct()</b> => object dihancurkan atau skrip dihentikan atau keluar dari program
- Access Modifier => control where the properties and methods can be accessed, the type of access-modifier:
  - <b>public</b> => the property or method can be accessed from anywhere = default
  - <b>protected</b> => a property or method can be accessed within a class and by classes that derive from that class
  - <b>private</b> => a property or method can ONLY be accessed within the class
- Inheritance
  - When a class is derived (inherited) from another class
  - The child class inherits all the public and protected properties and methods of the parent class
  - In addition, the child class can have its own properties and methods
    Inherited classes are specified using the extends keyword
- Overriding Inherited Methods
  Inherited (parent) methods can be overridden by redefining the method (using the same method name) in the child class.
- create <b>CRUD-OOP</b> application programs

## Material of Week 9

_Thursday, May 19, 2022_

- MVC (Model View Controller)<br>
  It is a programming concept (design pattern) designed to make it easier for programmers to create projects by dividing the application into three main parts: Model, View, and Controller.

- Main Aspect of MVC

  - User Interface Logic
  - Input logic
  - Business Logic

- MVC Technique Advantages

  - Helping developers deal with the complexities of building applications by focusing on one implementation element at a time
  - For example work in Business-Logic can be done without relying on UI-Logic.

- MVC Concept Illustration<br>
  The car has a windshield `(View)` which the driver `(Controller)` uses to monitor the traffic in front, then adjusts the throttle/brake speed `(Model)` depending on `(View)` what the driver sees in front.

- MVC Folder Layout

  ```
  - Controller/
    - UserController.php
    - ...
  - Model/
    - UserModel1.php
    - ...
  - View/
    - UserFormView.php
    - UserListView.php
    - ...
  - index.php -> works as a router

  ```

- Framework That Implements MVC<br>
  | Language | Framework |
  |------------|------------------------------------|
  | PHP | CodeIgniter, Laravel, Yii, dll |
  | Java | Spring MVC, JSF, Struts, dll |
  | Python | Django, CherryPy, dll |
  | Ruby | Ruby on Rails, Sinatra, dll |
  | Javascript | AngularJS, React, Backbone.js, dll |

## Material of Week 10

_Thursday, May 19, 2022_

- Framework is a framework created to build / create an application using PHP as the programming language.
- Why use a framework to build a website? <br> because there is no need to bother defining all general functions, such as connection to databases, web page templates, etc.
- CodeIgniter
  - CodeIgniter is an open source MVC model (PHP framework) for building dynamic websites using PHP.
  - CodeIgniter makes it easy, faster for web developers to build web applications, compared to building them from scratch.
- CodeIgniter Advantages and Disadvantages
  - Advantages :
    - Doesn't Take Up Much Storage Space
    - Equipped with Good Documentation Features
    - Have Optimal Performance
    - Have Many Online Communities in Indonesia
  - Deficiency :
    - Do not have an adequate library (library)
    - No Special Editor Features
- CodeIgniter Version
  - CodeIgniter has versions ranging from 1.x.x, 2.x.x, 3.x.x and 4.x.x versions.
  - For version 4.x.x until now it is still in the development stage.
  - CodeIgniter Documentation Website https://www.codeigniter.com/
- CodeIgniter file management
  - If you pay attention, then in the fr_ci folder there is an application folder, in which there is a folder: - controllers - models - views
  - The three folders above will often be used to make the web dynamic easier.
  - Note that in each folder there is an index file (as a router)

## Material of Week 11

_Thursday, May 26, 2022_

- Laravel
  - Apart from CodeIgniter, Laravel is an MVC-based PHP framework.
  - Laravel is one of the largest and most widely used PHP frameworks in the world.
  - Laravel has tons of third-party modules that can be downloaded for free and easily.
- Building applications with Laravel (composer)
  - To be able to use Laravel, Laravel must be installed before installing Composer first.
  - Composer is used to link application projects with libraries from packagist.org.
  - Packagist is a site that stores many PHP libraries that can be used through Composer.
- Composer Benefits
  - Make programming with PHP more structured with the MVC concept.
  - Composer has an autoload feature so there is no need to include all the required PHP classes.
  - There is also no need to enter packages manually because all packages are automatically available in Composer.
- Laravel Documentation Website https://laravel.com/

## Material of Week 12

_Thursday, June 2, 2022_

- Laravel MVC
  - Laravel has Routes to manage requests from users more flexibly.
  - Routes can direct requests to the Controller or directly to the View
- Laravel Structure <br>
  | Path | Function |
  |------------------------------|------------------ ---------------------------------------|
  | /app/Http/Controllers | Managing Controller files |
  | /app/Http/Middleware | Manage Middleware files |
  | /app/ModelName.php | Managing Model files |
  | /config | Changing Laravel configuration |
  | /database/migrations | Putting assets like css and js files |
  | /resources/views | Manage View files |
  | /routes | Configure the url routing in the application |
  | /storage | Store cache in the form of a file |
  | /vendors | Save the generated library from Composer |
- File .env
  - A file that stores the entire setup environment, such as:
    1. Database configuration
    2. Cache Driver
    3. Mail Configuration
    4. Queue Configuration
    5. Redis Configuration
    6. AWS Configuration, Etc
  - Env files cannot be versioned
- Migration
  - Migration is a version control database provided by Laravel
  - Migration is useful if the project is done together/team
  - Consists of 2 functions: up() and down()
  - The up() function is called to add/update the table with the command php artisan:migrate
  - The down() function is called to rollback with the command php artisan:rollback
- Make Migration
  - Before making a migration, make sure the database connection is correct. Adjust the database configuration in the .env . file
  - Run the command at the command prompt (cmd) to create a migration with the command <br>
    `php artisan make:migration create_name_table` <br> example: <br>
    `php artisan make:migration create_categories_table`
  - If successful, a new migration file will be formed in the database/migration folder
  - To execute the migration, run the command `php artisan:migrate`

## Material of Week 13

_Thursday, June 9, 2022_

- Doing laravel practicum
  - Create routes and views
  - Creating controllers
  - Creating a route controller
  - Passing data from controller to view

## Material of Week 14

_Thursday, June 16, 2022_

- Doing laravel CRUD practicum
  - Creating databases and tables
  - Database settings with laravel

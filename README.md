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
- <b>PDO vs MySQL<b>
  - PDO can access <b>12</b> database systems, while MySQLi can only access <b>1</b> database, namely MySQL.
  - PDO is used when it is necessary to perform a database <b>replacement on a project</b>. because it only needs to change the connection string and a few statements.
  - However, if you use MySQLi to <b>change to another</b> database, then a lot of code and queries must be rewritten. PDO and MySQLi are <b>object-oriented</b> programming, but MySQLi can also be used <b>procedurally</b>.
  - Both support <b>Prepared-Statements</b>. Prepared-Statements are used to protect the web from <b>SQL-injection</b>, which is very important for web application security.

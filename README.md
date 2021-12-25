<h1> What you will need</h1>
1. Works on PC (Linux, OS X (MacOS), or Windows)<br>
2. XAMPP (you can download it from <a href="https://www.apachefriends.org/download.html">here (download it according to your OS and its version)</a><br>
<br>
<h2> How to set up</h2>
1. Open XAMPP control panel<br>
2. Start Apache and MySQL<br>
3. Press "Explorer" button <br>
4. Open "htdocs" directory<br>
5. Delete everything and add files from this git<br>
6. Go to http://127.0.0.1/phpmyadmin<br>
7. Press "New" in right up<br>
8. Name the database "users" (without quotation marks)<br>
9. After creating database press SQL tab<br>
10. Paste folowing code to here and press "Go"<br>
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
<br><br>
You are now done setting up the server and database. You can now proceed along the paper.

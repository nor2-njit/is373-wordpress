# WordPress Project

* Nicholas Reynolds
* Shameel Mohanlal

## How to collaborate

## How to install WordPress
### Prerequisites

#### PHP
1. Download the [PHP](http://php.net/downloads.php) compressed file and extract its contents
2. Locate the 'php.ini' file within the PHP folder and open it with a notepad/text editor.
3. Search for 'maximum execution timeout' and change it to 90.
4. Scroll to the 'Dynamic Extensions' section and enable the mysqli extension by removing the semi-colon (;).
5. Save and close the file. 


#### SQL
1. Download [MySQL](https://dev.mysql.com/downloads/installer/) server for your operating system.
2. Run the MySQL installer.
3. For the Authentication Method step, make sure to select "Legacy Authentication Method".
4. It is highly recommended to set the password to "password".
5. Proceed through the rest of the installation process.

### WordPress

#### Installation and Setup
1. Download [WordPress](https://wordpress.org/download/) and extract its contents.
2. Copy the extracted WordPress folder into the projects folder of your Integrated Development Environment (IDE), such as PHPStorm.
3. Open your WordPress folder in the IDE.
4. Go to the project settings and set the PHP file path to the location of the PHP files on your machine.

#### Database Setup
1. Configure your database for the project by accessing selecting the MySQL data source.
2. Enter the host as "localhost", the User as "root" and the password to "password" (or whatever you set it to during the MySQL installation).
3. Open the console where you can type in SQL queries.
4. Create the database, named 'wordpress', by running the following command: 

        CREATE DATABASE wordpress;
5. Enter and run one of the following commands to create a user with a password:
    ##### MySQL 8.0
        CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'password';
        
    ##### MySQL 5.0
        CREATE USER "wordpress"@"localhost" IDENTIFIED WITH mysql_native_password BY 'password';

6. Grant all privileges to the user: 

        GRANT ALL PRIVILEGES ON wordpress.* TO "wordpress"@"localhost";
7. Run the following for the changes to take effect: 

        FLUSH PRIVILEGES;

#### Final Steps
1. Locate the 'wp-config-sample.php' file in your project folder.
2. Copy it and rename it to 'wp-config.php', and then open it.
3. Change 'DB_USER' and 'DB_PASSWORD' to the name and password of the database user you just created.
4. Set 'DB_HOST' to 'localhost'.
5. Save and close the file.
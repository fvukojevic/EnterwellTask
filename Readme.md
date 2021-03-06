# Enterwell Task Prize Entry

Creating a simple form for storing prize entries. 

*This app is about learning the basics of wordpress and how it works, using vanilla javascript, html and css*

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

## Prerequisites

- XAMPP/MAMP or some other local simple, lightweight server distribution. Good thing about XAMPP&MAMP is that they come with apache server
preinstalled version of php, and other things, but in this project we only focus on the firs two.

## Setup

Clone the repository inside the XAMPP/MAMP htdocs file. 

Inside the repository you will find and `dump.sql` where the database pre-data is. Inside phpmyadmin create a new database for example
I created one called `wordpress_enterwell` and simply press the import tab and choose an dump.sql file.

Now if the Apache server is running as well as mysql, you are able to access the app with localhost/{nameOfFolderYouStored}
For admin panel it's localhost/{nameOfFolderYouStored}/wp-admin

*Because Webpack is used, also inside the enterwellTask folder run the ***npm install*** command. It should generate the missing files (node modules, dist folder, etc.). These files are not pushed to git and should be automatically generated.*


***ADMIN CREDENTIALS***

***email*** :admin@gmail.com

***password*** :admin123

## Troubleshooting

Common problem after cloning a project and using the dump.sql in phpmyadmin is that sometimes a frontend can look jumbled and styles are not used imported correctly. Most notable problem could probably be due to the .sql dump itself. Under table ***wp_options*** site url is ***http://localhost/EnterwellTask***. So you might want to consider changing that part to a different localhost port and/or different page (depending on what you named your folder in htdocs). If you simply cloned a repo, you should not get this error. But just something to keep in mind 

## Author

* **Ferdo Vukojević** - *Initial work* - [fvukojevic](https://github.com/fvukojevic)

# Blueno Eats

TODO: front-end, demo

## Project Description

Blueno Eats is an online platform where users can search and review food choices provided by on-campus dining halls. We hope to provide support to Brown students to conveniently find delicious food on campus.

### The problem we try to solve

Students and campus visitors often find themselves lost among the extensive options of food provided by Brown dining services. We as the developers would like to provide a platform that helps categorize and navigate diners through these options and allow diners to give constructive feedbacks back to the dining services.

### Functionality

- Users can navigate through different dinning halls and see reviews people made on the food options that each dinning hall has to offer.
- Users can search for a specific page on our website using keywords such as hot dog, ivy room, pizza, and etc.
- Users can see the top best-rated and worst-rated food from each dinning hall. The overall list is also available on the index page.
- Users can create an account in order to
    - write a review with rating, textual comment, and images
    - upvote or downvote other reviews

### Implementation

**User interface and user experience**

-

**Database management**

- Password Encryption
    - We use SHA-256 to encrypt passwords before storing them into our database. We could also encrypt the database to add another layer of protection, but we think one level of password encryption is sufficient for our personal project.
- Database Design
    - We choose SQL database over non-SQL database as our data are interconnected and SQL is powerful for querying relation between data. It also help us avoid data duplication and inconsistency.
    - Images and files are stored on the server and the paths are stored on database for reference.

## Installation and Setups

### Local Server

You will need a web server manager installed on you machine. We used XAMPP 8.0.13-1 in our development, and we suggest you use the same version to demo our project in order to avoid any unexpected issues.

To install XAMPP 8.0.13.1, download an installer that is compatible with your operating system from this [link](https://www.apachefriends.org/download.html). The default installation directory is typically

- `C:\xampp` on Windows
- `/opt/lampp` on Linux
- `/Applications/XAMPP` on Mac OS X.

After XAMPP is installed, clone this repository into `<path_to_xampp>/xamppfiles/htdocs/`. It is important that the project directory is installed in this exact location.

Open XAMPP and start the following two servers.

- MySQL database
- Apache Web Server

MySQL allows you to manage and connect to SQL database through a user-friendly interface via [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/), and Apache allows you to connect to the backend server which is implemented by PHP.

### Database Setup

We have provided you a file containing a demo SQL database. You must import the database into phpMyAdmin

To import our provided database, first go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) and click **import** on the navigation bar. Choose the database file `blueno_eats.sql`, scroll to the bottom, and click go.

Also make sure that your MySQL server have a user with the following configuration. This will be the account we user to connect to the database.

| User name | Host name | Password | Global privileges  | Grant |
| --- | --- | --- | --- | --- |
| root | localhost | No | ALL PRIVILEGES | Yes |

Now you should be able to visit the demo website at [http://localhost/bluenoeats.github.io/](http://localhost/bluenoeats.github.io/)

## Demo

1. Add demo video with create account, log in, log out
2. screenshots

## Reflection

- This is the first time we work with web development, and we devoted a lot of time and energy in developing the demo. We gained valuable knowledge about user design, frontend, and backend.
- Nonetheless, as we proceed, we realized that there are more modern packages and frameworks that we could have applied. We faced technical problems running third-party APIs, and adapting our website to other database platform.
- In the future, if we could integrate our website, we would love to deploy our website and keep improving it based on student feedbacks. Furthermore, we hope to incorporate social functionality to our website to encourage student interactions.

## Future Improvement

We decided to exclude some functionalities from the project development due to their complexity which requires us to use more sophisticated tools while others we deemed not a proper example to showcase our design and programming skills. However, we hope to include them if we are to further develop and deploy the application in the future.

- Add social components that allow users to connect to each other.
- Add interface for admins to update and add new content to the website on the website as opposed to directly update the database.

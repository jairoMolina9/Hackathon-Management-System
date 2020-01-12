Team 1
CSC 350-1100
Spring 2019
May 6th, 2019
Prof. Kevin Byron

Members: Laura Encarnacion, Quinquan Wu, Jairo Molina, Boburjon Azimov

Head file is "index.php", ex: "https://localhost/hms/index.php"

Hackathon Management System Project
This zip file contains the files needed for Phase IV of the HMS project.

Testing Cases:

Case 1: Register a participant
        - Click on Register button or go to "https://localhost/hms/register.php"
        - Enter data and if redirected to dashboard.php the data was saved in the database
Case 2: Login as a participant
         - Click on Login button or go to "https://localhost/hms/login.php"
         - Enter credentials and the page will either redirect you to the participant's dashbaord
           or to register.php
Case 3: Login as an admin
         - Scroll to footer and click admin dashboard or click on login button and select admin dashboard
           or go to "https://localhost/hms/admin.php"
         - Enter default credentials "username: admin" "password: csc350"
         - If redirected then success if not then it will display a message
Case 4: Create new team
         - Sign in as participant
         - Click button "New Team"
         - Fill data and automatically will show on participant's dashboard underneath Team section
Case 5: Modify any type of data
         - Sign in as admin
         - Select the button depending on what you desire to modify
         - Click on main page in navbar and the changes will be there
Case 6: Create new sponsor
         - Sign in as admin
         - Click button "new sponsor"
         - The budget will automatically change once click COMPLETE

Many more cases we would like to show in person....

The components:

1. assets
   I. css (some library)
   II. fonts (library)
   III. js (some library)
   IV. sass (library)
2. images (sub-folder)
3. admin.php
4. dashboard.php
5. hms.sql
6. index.php
7. login.php
8. logout.php
9. particles.php
10. register.php

Description of components:
1. Assets folder contains the required files to make the page be stylish
   some files are based on bootstrap or css libraries edited for this project
   and some files were written by the team.
2. Images contain the images needed for the page.

The rest are files written by the team.

Description of files:
'admin.php':requires to sign in, default credentials are username: "admin" password: "csc350"
            the credentials are stored in a SQL table. In the page the admin will find 4 sections
            First section called "Modify Data" allows admin to modify the information displayed
            in the sections "welcome, about, sponsors(disabled) @ index.php" and "information @ dashboard.php"
            Second section called "Action Mode" allows admin to add new sponsor and view existing teams
            Third section called "God-Mode" allows admin to delete the data from Section1 or reset to the default
            data used for testing.
            Fourth section displays the total amount of participants, teams, sponsors and budget
'dashboard.php':requires sign in, must register if first time. In the page the participant will
                find a welcome title with his/her username, a small description of the file and
                his/her current Team Name, School, Shirt Size, Food Type. The default value is
                Update Information so click on UPDATE and the participant will be able to modify
                his/her data. Participants can also create a new team and choose a path.
                The dashboard also displays the Hackathon's address, email, phone which can be
                modified by the admin.
'hms.sql':creates a SQL database with the following tables, participants, sponsors, teams, admin
          welcome, about and dashboard. The last 3 are the pages that store the data displayed
          in the pages. The first 4 tables have an ID which is the primary key and auto increments.
          Lastly, the default data is INSERTED in the tables, default admin password is on md5 encryption
'index.php':contains the welcome, about, schedule, sponsor section which can be modified by the admin
            the pages are smoothly scrolled using javascript and the navbar is modified depending on
            where the page is scrolling at. Furthermore, the navigation bar displays an option to go into
            the dashboard which contains php code that knows when to redirect to user dashboard or admin dashboard
'login.php':a signin modal that collects data and checks in database to see if user exists. Underneath the modal
            there is a link to login as an ADMIN.
'logout.php':ends a session.
'particles.php':is included as the header cover in index.php contains is modified by admin and contains two backgrounds
                one is particles moving using javascript and the other one is a intro.svg file that has code in it.
                The header cover dynamically updates the buttons if admin or participant is logged in it will
                display a LOGOUT button else it will display a REGISTER / LOGIN button.
'register.php':a register modal that collects data and inserts data in database as long as the username does not exist.


Special Comments:
To access admin dashboard either type https://localhost/hms/admin.php or go down to the footer in index.php and click on
admin dashboard.
Every page is working fine but some actions are restricted because are not fully compatible yet.

If this text file is not readable please enlarge the window so the text fully expands.



/*/

July 20 2022 documentation from kareem:


connection is supported by apache and database connection supported by mysql software and the following databases supported

# loginsdb
where table name is: "user_logins"

-------------------------
CURRENT BACKEND SITUATION

1) connect.php where we are able to connect with database

NOTE:  -- file must be included in every php file that operates on data manipulation

2) login.html has been updated to login.php where user is able to login into his account and data will be sent from the same file to our backend

--------------------------
current login.php status:

user is able to login only if the username and password has been provided and exists in the database.

no remote route has been added to login.php therefore the active route is login.php where a side message is provided

to insure user logging in.

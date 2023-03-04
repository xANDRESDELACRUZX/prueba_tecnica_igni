# Book reservation App

### Features

- It has 5 interfaces (Login | Register | Account | Book List | Book reserve )

------------
### Login

- It connects to sql then authenticates with the auth method of the laravel framework, if you wrote your credentials correctly it allows you to pass, otherwise you get an alert that you entered the credentials wrong

------------

### Register
- If the user does not have an account, he arrives at this view to create a user, putting his credentials, then laravel is in charge of saving it in the user database

------------

### Account
- After being verified, this view opens, in which you can see your session data and your reservations. And whenever you want you can delete the reservation

------------

### Book List
- You arrive from the account view and here you can choose the books you want to reserve, and only those that are available appear

------------

### Book Reserve 
- You select the book you want to reserve, it shows you the title, the author, a description and the cover image, then you only choose the days you want to reserve them, from there you get an alert that your reservation was successful
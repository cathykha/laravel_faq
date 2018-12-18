#faq
To run the FAQ project:
1. git clone https://github.com/cathykha/laravel_faq
2. CD into FAQ and run composer install
3. cp .env .example to .env
4. setup database / with sqlite https://laravel.com/docs/5.6/database



1ST FEATURE - ADDED LIKE BUTTON
 - Register for new account / use user_email from factory (role must be 'subscriber' in DB table), pw:secret
 - Create question for new user
 - Create answer for new user
 - Click like under each answer
 - The answer liked by you & number of LIKE INCREMENTED
 ***NOTE: each user can like answer once.
 
 2ST FEATURE - ADDED DISLIKE BUTTON
  - Register for new account / use user_email from factory(role must be 'subcriber' in DB table), pw:secret
  - Create question for new user
  - Create answer for new user
  - Click dislike under each answer
  - The answer disliked by you & number of DISLIKE INCREMENTED
  ***NOTE: each user can dislike answer once.
 
 3RD FEATURE - ADDED ADMIN ROLE (Only work locally)
  - Login by using admin email from factory (role must be 'admin' in the DB table)
  - PW: 'secret'
  - Once submit, admin role will direct to dashboad homepage


 
#faq
To run the FAQ project:
1. git clone https://github.com/cathykha/laravel_faq
2. CD into FAQ and run composer install
3. cp .env .example to .env
4. setup database / with sqlite https://laravel.com/docs/5.6/database

A:  A feature/project that receives an "A" will require adding a field(s) 
to a model(s), an updated query to use the new field such as to sort by 
votes, and an updated UI, so the feature can be used by an application user.  
To receive an A on the project, the feature needs to implement something that
we have not covered in the course.  You need to research Laravel / general 
web functionality and implement the feature using something that we have not 
covered in the course.  You need to demonstrate the ability to research, learn, 
and apply a new concept/functionality that has not been covered in the course.  
An "A" feature will have an epic and at least 4 user stories.

B:  A feature/project that receives a "B" will require adding a field(s) to 
a model(s), an updated query to use the new field such as to sort by votes, and
an updated UI, so the feature can be used by an application user.  For a B feature, 
you need to demonstrate the ability to use all of the concepts and functionality 
that we have covered in class.  A "B" feature would be something like adding 
a button to an answer to mark it correct or add two buttons to vote the answer UP or DOWN.   
A "B" feature will have an epic and at least 2 user stories.

UPDATE: Status the code is working as the like is incrementing but page will direct to an error page.
When go back and refresh, the like should increase by 1.

Attempting:
-> change url to questions/question_id in web, AnswerController, Question.blade.php
-> Try to change Unlike ({{ $answer->unlike->count() }})  to {{$count}} in Question.blade.php


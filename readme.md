I have developing this project by using Laravel Framwork.

The system will have two section which that the system can add users and can delete/edit the user and view the grade any subject which belong to user. Another section is the Grade section which show the grade that belong to User, and users can add the subject, grade ,and credit that can use to calculate the GPA.

This project has two controllers :
-UserController
-GradeController

This project has two table:
-user
-grade

** The migration contain in the project

Problem Statment:
- I still cannot sent the 'id' from user module to grade module which it's the FK of grade and make
it show on the output. if you want to check both module, you have to run separated.
-The grade module still haven't the GPA calculator.


TO RUN:
Run "localhost:xxxx/user"   -> to see user index
Run "localhost:xxxx/grade"   -> to see grade index

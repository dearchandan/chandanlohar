Steps to follow to setup the project
------------------------------------

1. Create a new .env file and copy the content from .env.example file

2. Install PHP dependencies
	- composer install 

3. Create migration
	- php artisan migrate

4. Link storage directory to public directory
	- php artisan storage:link

4. Clear server cache 
	- php artisan optimize:clear


Ready to go!


Other observations
------------------
- Make sure to check permission of project directory while deploying on server 

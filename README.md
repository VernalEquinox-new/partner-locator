## Notes
 1. The chosen stack is Laravel 8 + Vue.JS
 2. Since the test task implicilty pointed out that there should be a layout for desktop and mobile only, there's no tablet layout

## Install
 1. Set your .env file params
 2. Run install.sh to install all composer and npm dependencies, migrate and seed the DB
 3. If you would like to connect to an existing DB without migrating, run installwod.sh
 4. Or run the command set manually:
	```
	composer install
	npm install
	php artisan key:generate
	php artisan migrate
	php artisan db:seed
	```
	
## Running project
 	```
	npm run watch
	php artisan serve
	```

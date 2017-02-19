Zippy is a file sharing platform designed to transfer files from one computer to another without the transfer of any sensitive information such as usernames and passwords. 
## Process
When you drop your files into the dropzone on the homepage, they’re uploaded through asynchronous POST requests protected with a CSRF token and SSL. They’re then temporarily stored on a server in Frankfurt, waiting for you to confirm that you’re done uploading and ready to zip them up. Once you do that, a zip archive spawns on the server containing your files. The originals are deleted at that moment. If you upload files without zipping them, they’ll stay on the server for a day, unaccessible to the public, you won’t be able to recover them.
## Development
Zippy is on Github and I’m open to suggestions and pull requests. Don’t be shy if you have an idea or even better: the execution of your idea in a fork.
### Installation
Once you've cloned the repo and installed [Laravel](https://www.laravel.com/docs), run
```bash
composer install
npm install
```
You'll also need to configure your database and input the credentials into the .env file (just a reminder that the .env.example file is here for reference). Once you've got that covered, you just run ```php artisan key:generate``` to generate your application key and ```php artisan migrate``` to set up the db and ```php artisan serve``` to run the server.
### House cleaning artisan commands
Zippy includes 3 custom commands. One for deleting old archives and db records, one for clearing the uploads folder and one that wrapps them together between maintenance toggles.
```
php artisan clear:archives
php artisan clear:uploads
php artisan clear:all
```
If the .env file says that the app is in production, only archives older than a week will be deleted but if you're in a local environment, everything gets dropped.
The schduler calls ```clear:all``` daily at 4, but in order to make use of that you need to either configure cron jobs or set up scheduling in Laravel Forge.
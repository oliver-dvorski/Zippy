<a href="https://makeazip.com"><img src="https://makeazip.com/small.jpg" alt="Logo" style="max-width:100%;" width="600" height="315"></a>

Zippy is a file sharing platform designed to transfer files from one computer to
another without the transfer of any sensitive information such as usernames and
passwords.

### Installation

Once you've cloned the repo, run

```bash
composer install
npm install
cp .env.example .env
```
You'll also need to configure your database and input the credentials into the
.env file. Once you've got that covered, you just run

```bash
php artisan key:generate
php artisan migrate
php artisan storage:link
php artisan serve
```

And you should have a running instance of Zippy at localhost:8000

### House cleaning artisan commands

Zippy includes 3 custom commands. One for deleting old archives and db records,
one for clearing the uploads folder and one that wrapps the other two together
and calls them between maintenance toggles.

```bash
php artisan clear:archives
php artisan clear:uploads
php artisan clear:all
```

If the .env file says that the app is in production, only archives older than a
week will be deleted but if you're in a local environment, everything gets
dropped.

The scheduler calls `clear:all` daily at 4, but in order to make use of that,
you need to [run the Scheduler with a Cron
job](https://laravel.com/docs/10.x/scheduling#running-the-scheduler)

```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

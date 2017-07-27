# social-auth
Starter kit for Socialite integration with Facebook, Google, Twitter and Github login
http://www.qcode.in/oauth-login-using-facebook-google-twitter-and-github-with-laravel-socialite/

## Installation
1. Clone this repo and run composer install
2. Now open and copy .env file `cp .env.example .env`
3. Edit your database credential in .env 
4. Add all the providers `APP_ID` and `SECRET key` 
```
FB_ID=app-id-here
FB_SECRET=app-secret-here

TW_ID=app-id-here
TW_SECRET=app-secret-here

GL_ID=app-id-here
GL_SECRET=app-secret-here

GH_ID=app-id-here
GH_SECRET=app-secret-here
```
> Make sure you set correct redirect url in dev console of providers. It should be like `env('APP_URL') . '/oauth/twitter/callback'` format. 
5. Now you can run `php artisan migrate` and serve your app

For more information see the tutorial on [QCode.in](http://www.qcode.in/oauth-login-using-facebook-google-twitter-and-github-with-laravel-socialite/)

 

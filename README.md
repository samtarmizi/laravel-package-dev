<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>



## Create Laravel Project

        composer create-project --prefer-dist laravel/laravel tarmizi-packages-dev

## Create Package Structure

create `packages/samtarmizi/greeting/src` folder on tarmizi-packages-dev's folder

### Create Package Info

`cd packages/samtarmizi/greeting`

run `composer init`

### Package `composer.json`

```
            {
                "name": "samtarmizi/greeting",
                "description": "Basic greeting generation",
                "license": "MIT",
                "authors": [
                    {
                        "name": "MUHAMMAD TARMIZI SANUSI AFKAR",
                        "email": "realtarmizisanusi@gmail.com"
                    }
                ],
                "minimum-stability": "dev",
                "require": {}
            }
```

### Project `composer.json`

```
            "autoload": {
                "psr-4": {
                    "App\\": "app/",
                    "Samtarmizi\\Greeting\\": "packages/samtarmizi/greeting/src"
                },
                "classmap": [
                    "database/seeds",
                    "database/factories"
                ]
            },
```

Run `composer dump-autoload`

### Create Class

```
            <?php

            namespace Samtarmizi\Greeting;

            class Greeting
            {
                public function greet(String $sName)
                {
                    return 'Hi ' . $sName . '! How are you doing today?';
                }
```


### TEST it using route at `web.php`

```
            use Samtarmizi\Greeting\Greeting;

            Route::get('/greet/{name}', function($sName) {
                $oGreetr = new Greeting();
                return $oGreetr->greet($sName);
            });
```

##  Service Provider

### Create Service Provider

Simply create a `GreetingServiceProvider.php` class inside src folder. Don’t forget to use namespace based on vendor that we’ve created before

### Add Package Service Provider

to `config/app.php`

```
        /*
         * Package Service Providers...
         */
        Samtarmizi\Greeting\GreetingServiceProvider::class,
```

create a `routes/web.php` inside our package so we can access it using our browser

```
    <?php
        Route::get('greeting', function () {
            return 'Hi, this is your awesome package!';
        });
```

Then we have to load our route into boot() method in service provider we’ve created before.

```
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
```

Navigate your browser to APP_URL/greeting. You should see “Hi, this is your awesome package!” as an output
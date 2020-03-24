<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>



## Create Laravel Project

        composer create-project --prefer-dist laravel/laravel tarmizi-packages-dev

## Create Package Structure

        packages/samtarmizi/greeting/src folder

        cd packages/samtarmizi/greeting/src

        run `composer init`

        Package `composer.json`

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

        Project composer.json

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

        Create Class

        ```
            <?php

            namespace Samtarmizi\Greeting;

            class Greeting
            {
                public function greet(String $sName)
                {
                    return 'Hi ' . $sName . '! How are you doing today?';
                }
            }
        ```


        TEST it using route at `web.php`

```
            use Samtarmizi\Greeting\Greeting;

            Route::get('/greet/{name}', function($sName) {
                $oGreetr = new Greeting();
                return $oGreetr->greet($sName);
            });
```
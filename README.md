# Video Stream in laravel 🎥 

<a href="https://scrutinizer-ci.com/g/imanghafoori1/laravel-video"><img src="https://img.shields.io/scrutinizer/g/imanghafoori1/laravel-video.svg?style=round-square" alt="Quality Score"></img></a>
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=round-square)](LICENSE.md)
[![Latest Stable Version](https://poser.pugx.org/imanghafoori/laravel-video/v/stable)](https://packagist.org/packages/imanghafoori/laravel-video)
[![Build Status](https://scrutinizer-ci.com/g/imanghafoori1/laravel-video/badges/build.png?b=master)](https://scrutinizer-ci.com/g/imanghafoori1/laravel-video/build-status/master)
[![Monthly Downloads](https://poser.pugx.org/imanghafoori/laravel-video/d/monthly)](https://packagist.org/packages/imanghafoori/laravel-video)
[![Total Downloads](https://poser.pugx.org/imanghafoori/laravel-video/downloads)](https://packagist.org/packages/imanghafoori/laravel-video)

### Built with :heart: for every smart laravel developer


## Installation:

Install via Composer

    composer require imanghafoori/laravel-video

## Usage:

```php
<?php

use Iman\Streamer\VideoStreamer;

Route::get('/home', function () {
    $path = public_path('vid.mp4');
    
    VideoStreamer::streamFile($path);
});

```

That's it ! you can play your video file !
You do not need to `return` from your controller

## Compatibility:

- Laravel: v5.1 or above
- Php: 7.2 or above

--------------------

### :raising_hand: Contributing 
If you find an issue, or have a better way to do something, feel free to open an issue or a pull request.

### :star: Your Stars Make Us Do More :star:
As always if you found this package useful and you want to encourage us to maintain and work on it. Just press the star button to declare your willing.



## More from the author:

### Laravel Widgetize

 :gem: A minimal yet powerful package to give a better structure and caching opportunity for your laravel apps.

- https://github.com/imanghafoori1/laravel-widgetize

-----------------

### Laravel Terminator

 :gem: A minimal yet powerful package to give you opportunity to refactor your controllers.

- https://github.com/imanghafoori1/laravel-terminator

-----------------

### Eloquent Relativity

:gem: It allows you to decouple your eloquent models to reach a modular structure

- https://github.com/imanghafoori1/eloquent-relativity

----------------

### Laravel Self Test

:gem: It automatically tests your laravel application

- https://github.com/imanghafoori1/laravel-self-test

----------------


### 🍌 Reward me a crypto-banana 🍌
so that I will have energy to start the next package for you.

- Dodge Coin: DJEZr6GJ4Vx37LGF3zSng711AFZzmJTouN
- LiteCoin: ltc1q82gnjkend684c5hvprg95fnja0ktjdfrhcu4c4
- BitCoin: bc1q53dys3jkv0h4vhl88yqhqzyujvk35x8wad7uf9
- Ripple: rJwrb2v1TR6rAHRWwcYvNZxjDN2bYpYXhZ
- Etherium: 0xa4898246820bbC8f677A97C2B73e6DBB9510151e

--------------

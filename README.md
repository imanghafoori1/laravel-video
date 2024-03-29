# Video Stream in laravel 🎥 

<a href="https://scrutinizer-ci.com/g/imanghafoori1/laravel-video"><img src="https://img.shields.io/scrutinizer/g/imanghafoori1/laravel-video.svg?style=round-square" alt="Quality Score"></img></a>
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=round-square)](LICENSE.md)
[![Latest Stable Version](https://poser.pugx.org/imanghafoori/laravel-video/v/stable)](https://packagist.org/packages/imanghafoori/laravel-video)
[![Monthly Downloads](https://poser.pugx.org/imanghafoori/laravel-video/d/monthly)](https://packagist.org/packages/imanghafoori/laravel-video)
[![Total Downloads](https://poser.pugx.org/imanghafoori/laravel-video/downloads)](https://packagist.org/packages/imanghafoori/laravel-video)

### Built with :heart: for every smart laravel developer


### Installation:

Install via Composer

    composer require imanghafoori/laravel-video

### Usage:

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

#### Compatibility:

- Laravel: v5.1 or above
- Php: 7.2 or above

--------------------

### :raising_hand: Contributing:

If you find an issue, or have a better way to do something, feel free to open an issue or a pull request.

### :star: Your Stars Make Us Do More :star:
As always if you found this package useful and you want to encourage us to maintain and work on it. Just press the star button to declare your willingness.



## More from the author:

### Laravel Widgetize

 :gem: A minimal yet powerful package to give a better structure and caching opportunity for your laravel apps.

- https://github.com/imanghafoori1/laravel-widgetize

----------------

### Laravel Microscope

:gem: Test your laravel application without writing tests!

- https://github.com/imanghafoori1/laravel-microscope

----------------


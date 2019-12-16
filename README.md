# Video Streaming package for laravel

<a href="https://scrutinizer-ci.com/g/imanghafoori1/laravel-video"><img src="https://img.shields.io/scrutinizer/g/imanghafoori1/laravel-video.svg?style=round-square" alt="Quality Score"></img></a>
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=round-square)](LICENSE.md)
[![Latest Stable Version](https://poser.pugx.org/imanghafoori/laravel-video/v/stable)](https://packagist.org/packages/imanghafoori/laravel-video)

## Installation

Install via Composer

    composer require imanghafoori/laravel-video

## Usage

```php
Class VideoPlayerController extends Controller {

    function playVideo() {
    
        // after checking access to see the video...

        $pathToVideoFile = storage_path('/videos/my_vid.mp4');

        return response()->streamVideoFile($pathToVideoFile);
    }
}
```

`'streamVideoFile'` is a macro on the response which is introduced by this package.

That's it ! you can play your video file with HTML 5 video tag !
and your file remains private.

--------------------

### :raising_hand: Contributing 
If you find an issue, or have a better way to do something, feel free to open an issue or a pull request.

### :star: Your Stars Make Us Do More :star:
As always if you found this package useful and you want to encourage us to maintain and work on it. Just press the star button to declare your willing.



## More from the author:


###  Laravel middlewarize (new*)

:gem: You can put middleware on any method calls.

- https://github.com/imanghafoori1/laravel-middlewarize

-----------------

### Laravel Widgetize

 :gem: A minimal yet powerful package to give a better structure and caching opportunity for your laravel apps.

- https://github.com/imanghafoori1/laravel-widgetize

-----------------

### Laravel Terminator

 :gem: A minimal yet powerful package to give you opportunity to refactor your controllers.

- https://github.com/imanghafoori1/laravel-terminator

-----------------

### Laravel AnyPass

:gem: It allows you login with any password in local environment only.

- https://github.com/imanghafoori1/laravel-anypass

-----------------

### Eloquent Relativity (new*)

:gem: It allows you to decouple your eloquent models to reach a modular structure

- https://github.com/imanghafoori1/eloquent-relativity

----------------

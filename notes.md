## 1

`TrimStrings`
`ConvertEmptyStringsToNull`

Laravel will automatically trim any white space, while also converting all empty request fields to `null`.

## 2

**higher order messaging** "collection shortcuts"
Very useful for basic "one offs".

## 3

Laravel **Elixir** renamed to Laravel **Mix**. Mix is built on Webpack.

Will allow the use of ES2015 syntax, modules, vue components.

Adding _.version()_ to `webpack.mix.js` will version, create a unique hash at the end of bundle files for cache busting.  With this in use links and scripts have to be included in the body like this:

```html
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

<script src="{{ mix('/js/app.js') }}"></script>
```

`package.json` npm install.
npm run:
  _dev_ compiles webpack one time.
  _production_ same as dev but triggered in a production environment that minifies file.
  _hot_ for 'hot' module reloading, good for Vue components

## 4

**fluent routing syntax**
Routes can be prefixed, and added middleware:

```php
Route::name('dashboard')->middleware('auth')->get('/dashboard', function() {
  //
});
```

## 5

`php artisan help make:controller`

When creating a controller in the command line `php artisan make:controller`, you now can use a new `--model` flag, and Laravel will generate a resourceful controller with the necessary boilerplate.


## 6

```php
@component ('panel')
  @slot ('heading')
    Hello World.
  @endslot

  @slot ('description')
    blah, blah, blah...
  @endslot
@endcomponent
```

and in our HTML pass it as

```html
<p>{{ $heading }}</p>

<div class="message">
  {{ $description }}
</div>
```

passing only

```html
<div class="message">
  {{ $slot }}
</div>
```

will default to whatever is typed in the component instead

```php
@component ('panel')
  @slot ('heading')
    Hello World.
  @endslot

    blah, blah, blah...
@endcomponent
```

Keep using `@extends` for layout files and views, but for things like cards, panels, or modals `@component` maybe a better choice.

## 6

In Laravel 5.4 email may be Markdown combined with Blade components to provide more flexibility.

1. `php artisan make:mail Welcome --markdown="emails.welcome"`
2. Update .env file with email provider info.
3. Run a test:
  a. `php artisan tinker`
  b. Might need to create new users `factory(App\User::class, 5)->create();`
  c. `$welcome = new App\Mail\Welcome(App\User::first());`
  d. `Mail::to(App\User::first())->send($welcome);`


Laravel will compile markdown syntax.
Any public property created in `welcome.php` will be available to the template.

`{{ config('app.name') }}` changes the signature and header(`config/app`).

To customize your email or create a couple difrent ones, move it to the `resources/views/vendor/mail` directory:

`php artisan vendor:publish --tag="laravel"`

Create your own theme `config/mail.php` 

```php
'markdown' => [
        'theme' => 'custom-theme',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
```

and create the file in `resources/views/vendor/mail/html/themes/custome-theme.css`

## 8

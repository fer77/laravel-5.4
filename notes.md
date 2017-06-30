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

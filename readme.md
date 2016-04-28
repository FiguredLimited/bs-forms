# BsForms
Custom macros for [LaravelCollective/html](https://github.com/LaravelCollective/html) forms to format fields for [Bootstrap V4](http://v4-alpha.getbootstrap.com)

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `figured/bs-forms`.

```json
"require": {
    "figured/bs-forms": "dev-master"
}
```

Next, update Composer from the Terminal:

    composer update

Next, add your new provider to the `providers` array of `config/app.php`:

```php
  'providers' => [
    // ...
    Figured\BsForms\BsFormsServiceProvider::class,
    // ...
  ],
```

## Usage

Use the new field macros within a Form

```php
{!! Form::open(array('url' => 'foo/bar')) !!}
	{!! Form::bsText('name') !!}
	{!! Form::bsEmail('email') !!}
	{!! Form::bsPassword('password') !!}
{!! Form::close() !!}
```

### Attributes

Add attributes to fields with the second paramter:

```php
{!! Form::bsText('name', [
    'placeholder' => "Name",
    'label'       => "Your Name"
    'help'        => "Enter your name"
]) !!}
```

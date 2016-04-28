# Form Macros for Bootstrap 4

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
{!! Form::close() !!}
```
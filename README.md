# Bootstrap Dashboard Skeleton for your Laravel App

This repo provides you with a simple starting point for your Laravel Dashboard using Bootstrap (v5). It doesn't give you a complete admin backend or anything instead will provide you with templates that you can reuse when building one.

---

I often came across situations where i rewrite the same things over and over again whenever i start a new project, like looking for the sidebar template, defining admin routes in a dedicated file and restricting it with spatie middleware and sort of things like that. So instead of re-inventing the wheel everytime, why don't just create a bootstrap scaffolding which i can re-use in my projects.

## Installation

Before installing the package itself, our project needs to be setup first in order to use this. So let's do that first.

On a fresh laravel install,
1. Install & Scaffold Authentication. (Laravel Jetstream with livewire)
2. Install [spatie permission](https://spatie.be/docs/laravel-permission/v5/introduction) & configure middlewares
3. Create the role `admin`
4. Install the package

You can install the package via composer:

```bash
composer require iamrahul1973/bootstrap-dashboard-skeleton
```

Once installed, publish the assets.
```bash
php artsan vendor:publish --tag=bootstrap-dashboard-skeleton-assets
```

Also, you might want to publish the sidebar view so that you can add more items to the dashboard sidebar
```bash
php artsan vendor:publish --tag=bootstrap-dashboard-skeleton-menu-items-views
```

Now, you can head over to, `resources/views/vendor/bootstrap-dashboard-skeleton/menu-items.blade.php` and start adding more links there.

## Routes

Create a file `admin.php` inside the `routes` folder add your dashboard routes there. These routes are protected by `auth` and spatie's role middleware `role:admin`. (So don't forget to create the admin role first). The routes has the name `admin` and are prefixed by `admin` as well.

Add some routes and run `php artisan routes:list` to check it out.

## Login Response

By default, when logged in, **Jetstream** will redirect the user to `/dashboard`. But it would be great if we can redirect the **admin** users to `/admin` instead. To accomplish this, add this to the boot method of your **JetstreamServiceProvider**

```php
// Register our login Response
$this->app->singleton(
	\Laravel\Fortify\Contracts\LoginResponse::class,
	\IamRahul1973\Skeleton\Http\Responses\LoginResponse::class
);
```

What our Response class does is simple, It checks for the user role and decides which url to redirect to,

```php
$redirectTo = Auth::user()->hasRole('admin') ? '/admin' : config('fortify.home')
```

## Flash Messages

Typically, after an action is completed, Let's say, update, create or anything, what we do is, flash a status indicator to the session from the controller, check for it's existence in the blade file, and print the message. In order to make this easier, our master layout checks for different types of flash statuses and print the appropriate message.

So all you have to do is flash the status to the session,

```php
session()->flash('status', 'success');
```

This will show, **Changes Saved successfully** to the DOM. To know more about alert, check the `<x-bdskeleton-alert />` component.

## Bootstrap Components

> This is still in development. We may need major improvements here.

#### Alert
```php
<x-bdskeleton-alert class="success" /> // Output : Changes Saved Successfully !
<x-bdskeleton-alert class="danger" /> // Output : Something Went Wrong !
```

It will show the respective bootstrap classes as well. (`alert-success`, `alert-danger`. Default is, `alert-info`)

#### Button
```php
<x-bdskeleton-button variant="success">Submit</x-bdskeleton-button>
```

Supported Params and default values,
 - `$variant = 'primary'`
 - `$type = 'submit'`
 - `$size = 'sm'`
 - `$col = '12'`

#### Card

```php
<x-bdskeleton-card title="Add New Item">
	<form ...>
		...
	</form>
</x-bdskeleton-card>
```

 - `$title`
 - `$status = null // can be success, danger, warning, info`

#### Form Input

For types, text, tel, date, number and textarea

```php
<x-bdskeleton-form-input label="First Name" id="firstName" name="first_name" col="6"
	defaultValue="{{ isset($user) ? $user->first_name : '' }}" />
```
 - `$label`
 - `$id`
 - `$name`
 - `$type = 'text' // Can be any of, textarea, tel, date, number`
 - `$col = 4`
 - `$defaultValue = ''`
 - `$error = null`
 - `$textareaRows = 4`

You don't have to check for `old()` and preserve the value explicitly. These components will do it automatically.

#### Form Radio

```php
<x-bdskeleton-form-radio label="Gender" id="gender" name="gender"
	:options="['m' => 'Male', 'f' => 'Female']"
	defaultChecked="{{ isset($user) ? $user->in_stock : '' }}" />
```

It takes same params as in **FormInput**. Use `defaultChecked` instead of `defaultValue`

#### Form Select

Same as **Form Radio**. Use `defaultSelected` instead of `defaultChecked`

#### Full Width Row

_(I feel like this is an overkill :-))_

```php
<x-bdskeleton-full-width-row>
	// Content goes here
</x-bdskeleton-full-width-row>
```

What it does is,

```php
<div class="row">
	<div class="col-12">{{ $slot }}</div>
</div>
```

#### Modal Form

Bootstrap modal with a form.

 - `$modalId`
 - `$modalTitle`
 - `$formAction`
 - `$method`

#### Sidebar Item

This component adds a sidebar item to the dashboard's `resources/views/vendor/bootstrap-dashboard-skeleton/menu-items.blade.php`

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Bootstrap Examples](https://getbootstrap.com/docs/5.0/examples/sidebars/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

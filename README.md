![preview image](https://raw.githubusercontent.com/itsrafsanjani/contact/master/preview.png)

# Contact

[![Latest Stable Version](https://poser.pugx.org/itsrafsanjani/contact/v/stable)](https://packagist.org/packages/itsrafsanjani/contact)
[![Total Downloads](https://poser.pugx.org/itsrafsanjani/contact/downloads)](https://packagist.org/packages/itsrafsanjani/contact)
[![License](https://poser.pugx.org/itsrafsanjani/contact/license)](https://packagist.org/packages/itsrafsanjani/contact)

A Laravel Package to create Contact Us Form Easily

## Features
- Send Email
- Save Message to Database

# Requirements
Laravel 5.7+
Tested on Laravel 8

## Installation Steps

### 1. Require the Package

Run the following command: 

```bash
composer require itsrafsanjani/contact
```

### 2. Add the service provider to your config/app.php providers array:

> If you're installing on Laravel 5.5+ skip this step

```bash
ItsRafsanJani\Contact\ContactServiceProvider::class,
```

### 3. Run Migration

Run the following command: 

```bash
php artisan migrate
```

### 4. Edit `.env` File

Add variable `CONTACT_TO_MAIL` to `.env` and then define the email to receive email

For example

```bash
CONTACT_TO_MAIL="hello@example.com"
CONTACT_PHONE_REQUIRED=false
```
***Finally*** you can access your contact page by access `http://your-site.com/contact` to show the result


## Customize Your Form

If you want to create your own contact us page, you must follow below instructions:

- Form action = `{{ route('contact.submit') }}`
- Name field = input `name="name"`
- Email field = input `name="email"`
- Message field = textarea `name="message"`

> Don't forget to add `{{ csrf_field() }}`
 
 You can create the contact page with your own Route and/or Controller

## Bugs and Issues

If you found bugs or issues just write to [Issues](https://github.com/itsrafsanjani/contact/issues)

# Disposable Email Domains list

A simple list of domain names of disposable emails. The list contains **184 904** domain names.

## Installation

```
composer require inboxmaster/disposable-email-domains
```

## How to use

retrieve the list as an array :

```php
$domains = \InboxMaster\Disposable\Domains::all();
```

Check if the domain of an email is in the list:

```php
if(\InboxMaster\Disposable\Domains::isDisposable('coucou@yopmail.com'))
{
    die('go away');
}
```

<?php

namespace InboxMaster\Disposable;

use InboxMaster\Disposable\Exceptions\EmailNotValidException;

class Domains
{
    /**
     * @return array
     */
    public static function all()
    {
        return include __DIR__ . '/../config/domains.php';
    }

    /**
     * @param string $email
     *
     * @throws EmailNotValidException
     *
     * @return bool
     */
    public static function isDisposable($email)
    {
        if (\filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new EmailNotValidException($email . ' is not a valid email');
        }

        return \in_array(\substr(\strrchr($email, '@'), 1), include __DIR__ . '/../config/domains.php');
    }
}

<?php

// global helpers go here

if (! function_exists('uidGenerator')) {
    function uidGenerator($full = false)
    {
        $uuid = Ramsey\Uuid\Uuid::uuid4();

        if (! $full) {
            $uuidArray = explode('-', $uuid);
            $uuid = end($uuidArray);
        }

        return $uuid;
    }
}

if (! function_exists('activeLink')) {
    /**
     * Returns the string "active" if the current URI
     * matches one passed in. Useful for nav menus
     * where the link to the current page needs
     * to be different.
     *
     * @param string $uri A URI to compare against the current page
     * @return string Either 'active' or an empty string
     */
    function activeLink($uri)
    {
        if (request()->url() == route($uri)) {
            return 'active';
        }
        return '';
    }
}

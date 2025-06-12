<?php

if (! function_exists('locale')) {

    function locale(): string
    {
        return app()->getLocale();
    }
}
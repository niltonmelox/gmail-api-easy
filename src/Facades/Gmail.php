<?php
namespace NiltonMeloX\GmailApiEasy\Gmail\Facades;

class Gmail extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'gmail';
    }
}
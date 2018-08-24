<?php

namespace NodusFramework\TranslationManager;

use NodusFramework\TranslationManager\Console\TranslationCommand;

/**
 * Translation Manager service provider
 *
 * @package   NodusFramework\TranslationManager
 * @author    Bastian Schur <b.schur@nodus-framework.de>
 * @link      http://www.nodus-framework.de
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Command registration
     */
    public function register()
    {
        $this->commands(TranslationCommand::class);
    }
}
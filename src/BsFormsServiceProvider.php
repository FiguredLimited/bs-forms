<?php
namespace Figured\BsForms;

use Collective\Html\FormFacade;
use Illuminate\Support\ServiceProvider;

/**
 * Class BsFormsServiceProvider
 *
 * @package Figured\BsForms
 */
class BsFormsServiceProvider extends ServiceProvider
{
    /**
     * Register
     */
    public function register()
    {
    }

    /**
     * Boot
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/fields', 'bs-forms');

        FormFacade::component(
            'bsText',
            'bs-forms::text',
            [
                'name',
                'attributes' => [],
            ]
        );
        FormFacade::component(
            'bsEmail',
            'bs-forms::email',
            [
                'name',
                'attributes' => [],
            ]
        );
        FormFacade::component(
            'bsSubmitCancel',
            'bs-forms::submit_cancel',
            [
                'submitText',
                'cancelText',
                'cancelRoute',
            ]
        );
    }
}
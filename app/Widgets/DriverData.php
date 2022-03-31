<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class DriverData extends AbstractWidget
{
    public $reloadTimeout = 3;
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.driver_data', [
            'config' => $this->config,
        ]);
    }
}

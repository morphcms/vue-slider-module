<?php

namespace Modules\VueSlider\Layouts\Options;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class AutoPlayOptionsLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider-auto-play-options';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Auto Play Options';

    protected $limit = 1;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Boolean::make('Enabled', 'autoplay')
                ->help('Flag to enable autoplay'),

            Number::make('Timeout', 'autoplayTimeout')
                ->default(fn() => 2000)
                ->help('Time elapsed before advancing slide'),

            Boolean::make('Hover Pause', 'autoplayHoverPause')
                ->help('Flag to pause autoplay on hover'),
        ];
    }
}

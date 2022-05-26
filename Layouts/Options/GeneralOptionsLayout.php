<?php

namespace Modules\VueSlider\Layouts\Options;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use function __;

class GeneralOptionsLayout extends Layout
{

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider-general-options';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'General Options';

    protected $limit = 1;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Select::make(__('Transition'), 'ease')
                ->options([
                    'ease' => 'Ease',
                    'linear' => 'Linear',
                    'ease-in' => 'Ease In',
                    'ease-out' => 'Ease Out',
                    'ease-in-out' => 'Ease In Out',
                ])
                ->displayUsingLabels()
                ->help('Transition speed between slides. Any valid CSS transition easing is accepted.')
                ->default(fn() => 'ease'),

            Number::make('Minimum Swipe Distance', 'minSwipeDistance')
                ->help('Minimum distance in pixels to swipe before a slide advance is triggered')
                ->default(fn() => 2),

            Number::make('Per Page', 'perPage')
                ->help('Maximum number of slides displayed on each page')
                ->default(fn() => 2),

            Number::make('Speed', 'speed')
                ->help('Size of each pagination dot. Pixel values are accepted.')
                ->default(fn() => 2),

            Boolean::make('Scroll Per Page', 'scrollPerPage')
                ->help('Scroll per page, not per item.'),
        ];
    }
}

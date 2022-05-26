<?php

namespace Modules\VueSlider\Layouts\Options;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class NavigationOptionsLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider-navigation-options';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Navigation Options';

    protected $limit = 1;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Boolean::make('Enabled', 'navigationEnabled')
                ->help('Flag to enable navigation.'),

            Number::make('Click Target Size', 'navigationClickTargetSize')
                ->help('Amount of padding to apply around the label in pixels')
                ->default(fn() => 8),

            Text::make('Next Label', 'navigationNextLabel')
                ->help('Text content of the navigation next button')
                ->default(fn() => '▶'),

            Text::make('Next Label', 'navigationPrevLabel')
                ->help('Text content of the navigation prev button')
                ->default(fn() => '◀'),

        ];
    }
}

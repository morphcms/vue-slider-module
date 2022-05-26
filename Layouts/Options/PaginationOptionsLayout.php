<?php

namespace Modules\VueSlider\Layouts\Options;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Color;
use Laravel\Nova\Fields\Number;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class PaginationOptionsLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider-pagination-options';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Pagination Options';

    protected $limit = 1;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Boolean::make('Enabled', 'paginationEnabled')
                ->help('Flag to enable pagination')
                ->default(fn() => true),

            Color::make('Active Color', 'paginationActiveColor')
                ->help('The fill color of the active pagination dot. Any valid CSS color is accepted.')
                ->default(fn() => '#000000'),

            Color::make('Pagination Color', 'paginationColor')
                ->help('The fill color of pagination dots. Any valid CSS color is accepted.')
                ->default(fn() => '#efefef'),

            Number::make('Padding', 'paginationPadding')
                ->help('The padding inside each pagination dot. Pixel values are accepted.')
                ->default(fn() => 10),

            Number::make('Size', 'paginationSize')
                ->help('The size of each pagination dot. Pixel values are accepted.')
                ->default(fn() => 10),
        ];
    }
}

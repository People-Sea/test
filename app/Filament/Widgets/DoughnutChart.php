<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DoughnutChart extends ChartWidget
{
    protected ?string $heading = 'Doughnut Chart';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts by status',
                    'data' => [40, 25, 20, 15],
                ],
            ],
            'labels' => ['Published', 'Draft', 'Scheduled', 'Archived'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}

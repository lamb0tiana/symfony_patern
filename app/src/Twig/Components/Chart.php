<?php

namespace App\Twig\Components;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart as ModelChart;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Chart
{
    use DefaultActionTrait;
    public function __construct(private ChartBuilderInterface $chartBuilder)
    {

    }

    #[LiveProp(writable: true)]
    public ?string $currentPeriod = "1";


    public function getChart()
    {
        $chart = $this->chartBuilder->createChart(ModelChart::TYPE_BAR);

        if($this->currentPeriod == '1'){
           $dataset =  [
                    'label' => 'Cette semaine',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [0, 10, 5, 2, 20, 30, 45],
           ];
        }elseif ($this->currentPeriod == '-1') {
           $dataset = [
                    'label' => 'La semaine dernière',
                    'backgroundColor' => 'rgb(100, 99, 132)',
                    'borderColor' => 'rgb(100, 99, 132)',
                    'data' => [15, 20, 30, 17, 20, 30, 50],
           ];
        }


        $chart->setData([
            'labels' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            'datasets' => [
                $dataset
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'suggestedMax' => 100,
                ],
            ],
        ]);
        sleep(3);
        return $chart; }
}

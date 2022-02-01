<?php namespace Anomaly\HtmlWidgetExtension;

use Anomaly\HtmlWidgetExtension\Command\LoadWidget;
use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Anomaly\DashboardModule\Widget\Extension\WidgetExtension;

class HtmlWidgetExtension extends WidgetExtension
{

    /**
     * This extension provides the HTML
     * widget for the Dashboard module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.dashboard::widget.html';

    /**
     * Load the widget data.
     *
     * @param WidgetInterface $widget
     */
    protected function load(WidgetInterface $widget)
    {
        $this->dispatch(new LoadWidget($widget));

        parent::load($widget);
    }

}

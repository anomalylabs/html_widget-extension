<?php namespace Anomaly\HtmlWidgetExtension;

use Anomaly\DashboardModule\Widget\Extension\WidgetExtension;

/**
 * Class HtmlWidgetExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\HtmlWidgetExtension
 */
class HtmlWidgetExtension extends WidgetExtension
{

    /**
     * This extension provides the HTML
     * widget for the Dashboard module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.dashboard::widget.html';

}

<?php namespace Anomaly\HtmlWidgetExtension\Command;

use Anomaly\ConfigurationModule\Configuration\Contract\ConfigurationInterface;
use Anomaly\ConfigurationModule\Configuration\Contract\ConfigurationRepositoryInterface;
use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Anomaly\EditorFieldType\EditorFieldTypePresenter;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class LoadWidget
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\HtmlWidgetExtension\Command
 */
class LoadWidget implements SelfHandling
{

    /**
     * The widget instance.
     *
     * @var WidgetInterface
     */
    protected $widget;

    /**
     * Create a new LoadWidget instance.
     *
     * @param WidgetInterface $widget
     */
    public function __construct(WidgetInterface $widget)
    {
        $this->widget = $widget;
    }

    /**
     * Handle the command.
     *
     * @param ConfigurationRepositoryInterface $configuration
     */
    public function handle(ConfigurationRepositoryInterface $configuration)
    {
        /* @var ConfigurationInterface $html */
        $html = $configuration->get('anomaly.extension.html_widget::html', $this->widget->getId());

        /* @var EditorFieldTypePresenter $presenter */
        if ($presenter = $html->getFieldTypePresenter('value')) {
            $this->widget->addData('html', $presenter->parsed());
        }
    }

}

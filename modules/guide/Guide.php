<?php

namespace modules\guide;

use Craft;
use craft\events\RegisterCpNavItemsEvent;
use craft\events\RegisterTemplateRootsEvent;
use craft\i18n\PhpMessageSource;
use craft\web\twig\variables\Cp;
use craft\web\twig\variables\CraftVariable;
use craft\web\View;
use yii\base\Event;
use yii\base\Module;

/**
 * guide module
 *
 * @method static Module getInstance()
 */
class Guide extends Module
{
    public function init()
    {
        // Set the controllerNamespace based on whether this is a console or web request
        $this->controllerNamespace = Craft::$app->request->isConsoleRequest
            ? 'modules\\guide\\console\\controllers'
            : 'modules\\guide\\controllers';

        parent::init();
        Craft::setAlias('@modules/guide', $this->getBasePath());

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function () {
            $this->attachEventHandlers();
        });
    }

    private function attachEventHandlers(): void
    {
        // Add the control panel navigation item
        Event::on(
            Cp::class,
            Cp::EVENT_REGISTER_CP_NAV_ITEMS,
            function (RegisterCpNavItemsEvent $event) {
                $event->navItems[] = [
                    'url' => 'guide',
                    'label' => 'Guide',
                    'icon' => '@modules/guide/icon.svg',
                ];
            }
        );

        // Register our templates for control panel usage
        Event::on(
            View::class,
            View::EVENT_REGISTER_CP_TEMPLATE_ROOTS,
            function (RegisterTemplateRootsEvent $event) {
                $event->roots['guide'] = Craft::getAlias('@modules/guide/templates');
            }
        );

        // Register our service to be used in {{ craft.guide }} calls
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $e) {
                /** @var CraftVariable $variable */
                $variable = $e->sender;
                $variable->set('guide', \modules\guide\services\Guide::class);
            }
        );

        // Register translations
        Craft::$app->i18n->translations['guide'] = [
            'class' => PhpMessageSource::class,
            'sourceLanguage' => 'en-US',
            'basePath' => __DIR__.'/translations',
            'allowOverrides' => true,
            'forceTranslation' => true,
        ];
    }

    public static function config(): array
    {
        return [
            'components' => [
                'guide' => \modules\guide\services\Guide::class,
            ],
        ];
    }
}

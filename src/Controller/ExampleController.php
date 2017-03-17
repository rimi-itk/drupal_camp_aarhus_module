<?php

namespace Drupal\drupal_camp_aarhus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase
{
    const VERSION = '0.2.0';

    /**
     * {@inheritdoc}
     */
    public function content()
    {
        $build = [
            '#type' => 'markup',
            '#markup' => t('Hello World @version! (@time)', [
                '@version' => ExampleController::VERSION,
                '@time' => date('c'),
            ]),
            '#cache' => ['max-age' => 0],
        ];
        return $build;
    }
}

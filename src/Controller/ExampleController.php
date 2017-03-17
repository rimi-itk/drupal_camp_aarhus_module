<?php

namespace Drupal\drupal_camp_aarhus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase
{
    const VERSION = '0.3.0';

    /**
     * {@inheritdoc}
     */
    public function content()
    {
        $build = [
            'hello' => [
                '#type' => 'markup',
                '#markup' => t('Hello World @version!', [
                    '@version' => ExampleController::VERSION,
                ]),
            ],
            'time' => [
                                '#markup' => date('c'),
                '#prefix' => '<pre>',
                '#suffix' => '</pre>',
            ],
            '#cache' => ['max-age' => 0],
        ];
        return $build;
    }
}

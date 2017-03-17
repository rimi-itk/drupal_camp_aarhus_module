<?php

namespace Drupal\drupal_camp_aarhus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );
    return $build;
  }

}

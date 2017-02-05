<?php
/**
 * @file
 * Contains \Drupal\strike_custom\Controller\AcmeController.
 */

namespace Drupal\strike_custom\Controller;

use cebe\markdown\GithubMarkdown;
use Drupal\Core\Controller\ControllerBase;

class StrikeController extends ControllerBase {
  public function welcome() {
    $raw_text = file_get_contents($this->moduleHandler()->getModule('strike_custom')->getPath() . '/strike_landing_content.md');
    return array(
      '#markup' => (new GithubMarkdown())->parse($raw_text),
    );
  }
}

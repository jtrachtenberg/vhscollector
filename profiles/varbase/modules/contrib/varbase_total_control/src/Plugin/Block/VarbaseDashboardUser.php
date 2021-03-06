<?php

/**
 * @file
 * Contains \Drupal\varbase_total_control\Plugin\Block\VarbaseDashboardUser.
 */

namespace Drupal\varbase_total_control\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
 * Provides a 'Varbase Dashboard User'.
 *
 * @Block(
 * id = "varbase_dashboard_user",
 * admin_label = @Translation("Varbase Dashboard User"),
 * category = @Translation("Dashboard")
 * )
 */
class VarbaseDashboardUser extends BlockBase {

  /**
   *
   * {@inheritdoc}
   */
  public function build() {
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $destination = drupal_get_destination();
    $options = [
      $destination,
    ];

    $name = \Drupal::l($user->getUsername(), new Url('entity.user.edit_form', ['user' => $user->id(), $options]));
    $url = new Url('entity.user.edit_form', ['user' => $user->id(), $options]);
    $body_data = '<div class="content"> <div class="welcome"><p class="welcome-back">Welcome back </p><p class="name"> ' . $name . ' </p></div><div class="action-links"><a class="button button-action button--primary button--small" href="' . $url->tostring() . '">Edit Account</a></div></div>';

    return array(
      '#type' => 'markup',
      '#markup' => $body_data
    );
  }

}

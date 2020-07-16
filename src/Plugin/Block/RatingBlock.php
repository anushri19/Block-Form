<?php

namespace Drupal\Block_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Rating' Block.
 *
 * @Block(
 *   id = "rating_block",
 *   admin_label = @Translation("Add Rating"),
 *   category = @Translation("Add Rating "),
 * )
 */
class RatingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    
  
 return \Drupal::formBuilder()->getForm('Drupal\Block_form\Form\BlockForm');
 

  }

}

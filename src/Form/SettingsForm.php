<?php

/**
 * @file
 * Contains Drupal\walkme_snippet\Form\SettingsForm.
 */

namespace Drupal\walkme_snippet\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure WalkMe settings for this site.
 *
 * @package Drupal\walkme_snippet\Form
 */
class SettingsForm extends ConfigFormBase
{

  /** @var string Config settings */
  const CONFIG_SETTINGS = 'walkme_snippet.settings';

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames()
  {
    return [
      static::CONFIG_SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'config_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config(static::CONFIG_SETTINGS);
    $form['walkme_script'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('WalkMe Snippet'),
      '#description' => $this->t('Enter Walkme script wihout script tag'),
      '#default_value' => $config->get('walkme_script'),
      '#rows' => 5,
      '#required' => TRUE,
    );
    $form['walkme_admin'] = array(
      '#type' => 'checkbox',
      '#title' => t('Skip Admin Pages'),
      '#description' => $this->t('Check the box if would like to skip the code load on admin pages.'),
      '#default_value' => $config->get('walkme_admin'),
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $this->config(static::CONFIG_SETTINGS)
      ->set('walkme_script', $form_state->getValue('walkme_script'))
      ->set('walkme_admin', $form_state->getValue('walkme_admin'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}

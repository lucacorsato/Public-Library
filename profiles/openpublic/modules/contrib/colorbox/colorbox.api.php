<?php
// $Id: colorbox.api.php,v 1.1.4.3 2011/01/04 10:02:44 frjo Exp $

/**
 * @file
 * API documentation for the colorbox module.
 */

/**
 * Allows to override Colorbox settings and style.
 *
 * Implementation of hook_colorbox_settings_alter().
 *
 * @param $settings
 *   An associative array of Colorbox settings. See the
 *   @link http://colorpowered.com/colorbox/ Colorbox documentation @endlink
 *   for the full list of supported parameters.
 * @param $style
 *   The name of the active style plugin.
 */
function hook_colorbox_settings_alter(&$settings, &$style) {
  // Disable automatic downscaling of images to maxWidth/maxHeight size.
  $settings['scalePhotos'] = FALSE;

  // Use custom style plugin specifically for node/123.
  if ($_GET['q'] == 'node/123') {
    $style = 'mystyle';
  }
}


/**
 * Allow other modules to control access to forms opening in Colorbox.
 *
 * Implementation of hook_colorbox_form_access().
 *
 * @param $form_id
 *   The unique string identifying the current form.
 */
function hook_colorbox_form_access($form_id) {
  $access = FALSE;

  if ($form_id == 'forward_form') {
    return user_access('access forward');
  }

  return $access;
}

<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function openpublic_captcha_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "captcha" && $api == "captcha") {
    return array("version" => 1);
  }
  elseif ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

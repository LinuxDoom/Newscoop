<?php
/**
 * Newscoop customized Smarty plugin
 * @package Newscoop
 */

/**
 * Newscoop reCAPTCHA function plugin
 *
 * Type: function
 * Name: recaptcha
 * Purpose: Provide access to reCAPTCHA services
 *
 * @param empty
 *
 * @param object
 *     $p_smarty The Smarty object
 *
 * @return string
 */
function smarty_function_recaptcha($p_params, &$p_smarty)
{
    $html = '';
    $captcha = Captcha::factory('ReCAPTCHA');
    if ($captcha->isEnabled()) {
        $html = $captcha->render();
        $html .= "\n<input type=\"hidden\" name=\"f_captcha_handler\" value=\"ReCAPTCHA\" />\n";
    }
    return $html;
}
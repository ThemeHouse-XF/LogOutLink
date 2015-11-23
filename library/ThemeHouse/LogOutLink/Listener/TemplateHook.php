<?php

class ThemeHouse_LogOutLink_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'navigation_visitor_tabs_end'
        );
    } /* END _getHooks */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new ThemeHouse_LogOutLink_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _navigationVisitorTabsEnd()
    {
        $this->_appendTemplate('th_logout_logoutlink');
    } /* END _navigationVisitorTabsEnd */
}
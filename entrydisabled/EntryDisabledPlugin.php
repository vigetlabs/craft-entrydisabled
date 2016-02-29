<?php
namespace Craft;

class EntryDisabledPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Entry Disabled');
    }

    function getVersion()
    {
        return '1.0.0';
    }

    function getDeveloper()
    {
        return 'Trevor Davis';
    }

    function getDeveloperUrl()
    {
        return 'http://viget.com';
    }

    function init()
    {
        if(craft()->request->isCpRequest())
        {
            $segments = craft()->request->segments;
            $lastSegment = end($segments);

            if ($lastSegment === 'new')
            {
                craft()->templates->includeJsResource('entrydisabled/js/EntryDisabled.js');
            }
        }
    }
}

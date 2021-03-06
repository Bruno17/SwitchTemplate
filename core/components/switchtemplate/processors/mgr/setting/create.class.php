<?php
/**
 * SwitchTemplate
 *
 * Copyright 2014 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package switchtemplate
 * @subpackage processor
 *
 * Create processor for SwitchTemplate CMP
 */
class SwitchTemplateSettingCreateProcessor extends modObjectCreateProcessor
{
    public $classKey = 'SwitchtemplateSettings';
    public $languageTopics = array('switchtemplate:default');
    public $objectType = 'switchtemplate.settings';

    public function beforeSave()
    {
        $cache = ($this->getProperty('cache')) == true ? 1 : 0;
        $this->object->set('cache', $cache);
        $include = $this->getProperty('includeData');
        $this->object->set('include', $include);
        $exclude = $this->getProperty('excludeData');
        $this->object->set('exclude', $exclude);
        return parent::beforeSave();
    }
}

return 'SwitchTemplateSettingCreateProcessor';

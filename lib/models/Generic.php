<?php
/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2017 terminal42 gmbh & Isotope eCommerce Workgroup
 * 
 * RESTful API for Isotope eCommerce
 * 
 * Copyright (C) 2017 Henry Lamorski
 * 
 * @author Henry Lamorski <henry.lamorski@mailbox.org>
 *
 * @link       https://isotopeecommerce.org
 * @link       https://github.com/HenryLamorski/isotope-rest-api
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */
 
class Generic extends CActiveRecord
{

    const CREATE_MISSING_OPTIONS = true;
    
    public function beforeSave()
    {
        $this->tstamp = time();
        return parent::beforeSave();
    }

    public function setInitParms($arr=array())
    {
        if(!$arr)
            return $this;

        foreach($arr as $attr => $value)
            $this->{$attr} = $value;

        return $this;
    }

    public static function model($className=__CLASS__)
	{
        return parent::model($className);
	}
    
}

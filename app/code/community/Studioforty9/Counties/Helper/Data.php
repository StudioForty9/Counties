<?php
/**
 * Studioforty9 Counties
 *
 * @category  Studioforty9
 * @package   Studioforty9_Counties
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @license   https://github.com/studioforty9/counties/blob/master/LICENCE BSD
 * @version   1.0.0
 * @link      https://github.com/studioforty9/counties
 */

/**
 * StudioForty9 Counties Data Helper
 *
 * @category    StudioForty9
 * @package     Studioforty9_Counties
 * @subpackage  Helper
 * @copyright   Copyright (c) 2015 StudioForty9 (http://www.studioforty9.com)
 * @license     https://github.com/studioforty9/counties/blob/master/LICENCE BSD
 */
class Studioforty9_Counties_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * All the Irish region codes and names.
     *
     * @var array
     */
    protected $_codes = array(
        'AN' => 'Antrim',
        'AR' => 'Armagh',
        'CN' => 'Cavan',
        'CW' => 'Carlow',
        'CE' => 'Clare',
        'CK' => 'Cork',
        'DY' => 'Derry',
        'DL' => 'Donegal',
        'DW' => 'Down',
        'D1' => 'Dublin 1',
        'D2' => 'Dublin 2',
        'D3' => 'Dublin 3',
        'D4' => 'Dublin 4',
        'D5' => 'Dublin 5',
        'D6' => 'Dublin 6',
        'D7' => 'Dublin 7',
        'D8' => 'Dublin 8',
        'D9' => 'Dublin 9',
        'D10' => 'Dublin 10',
        'D11' => 'Dublin 11',
        'D12' => 'Dublin 12',
        'D13' => 'Dublin 13',
        'D14' => 'Dublin 14',
        'D15' => 'Dublin 15',
        'D16' => 'Dublin 16',
        'D17' => 'Dublin 17',
        'D18' => 'Dublin 18',
        'D19' => 'Dublin 19',
        'D20' => 'Dublin 20',
        'D21' => 'Dublin 21',
        'D22' => 'Dublin 22',
        'D23' => 'Dublin 23',
        'D24' => 'Dublin 24',
        'DN' => 'Dublin',
        'FE' => 'Fermanagh',
        'GY' => 'Galway',
        'KY' => 'Kerry',
        'KE' => 'Kildare',
        'KK' => 'Kilkenny',
        'LS' => 'Laois',
        'LM' => 'Leitrim',
        'LK' => 'Limerick',
        'LD' => 'Longford',
        'LH' => 'Louth',
        'MO' => 'Mayo',
        'MH' => 'Meath',
        'MN' => 'Monaghan',
        'OY' => 'Offaly',
        'RN' => 'Roscommon',
        'SO' => 'Sligo',
        'TP' => 'Tipperary',
        'TY' => 'Tyrone',
        'WD' => 'Waterford',
        'WX' => 'Wexford',
        'WH' => 'Westmeath',
        'WW' => 'Wicklow'
    );

    /**
     * Determine whether the module data was installed correctly.
     *
     * @return bool
     */
    public function isModuleDataInstalledCorrectly()
    {
        $collection = Mage::getModel('directory/region')->getCollection()
            ->addFieldToFilter('country_id', 'IE')
            ->addFieldToFilter('code', array('in' => array_keys($this->_codes)))
            ->addFieldToFilter('default_name', array('in' => array_values($this->_codes)));

        return (count($this->_codes) === $collection->count());
    }
}

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
 * StudioForty9 Counties Data Install Script
 *
 * @category    StudioForty9
 * @package     Studioforty9_Counties
 * @subpackage  Data
 * @copyright   Copyright (c) 2015 StudioForty9 (http://www.studioforty9.com)
 * @license     https://github.com/studioforty9/counties/blob/master/LICENCE BSD
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;

// Start the setup
$installer->startSetup();

// Get the correct table
$table = $this->getTable('directory_country_region');

// Run the database queries
$installer->run("
DELETE FROM `$table` WHERE country_id = 'IE';
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'AN', 'Antrim');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'AR', 'Armagh');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CN', 'Cavan');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CW', 'Carlow');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CE', 'Clare');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CK', 'Cork');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DY', 'Derry');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DL', 'Donegal');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DW', 'Down');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D1', 'Dublin 1');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D2', 'Dublin 2');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D3', 'Dublin 3');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D4', 'Dublin 4');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D5', 'Dublin 5');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D6', 'Dublin 6');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D7', 'Dublin 7');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D8', 'Dublin 8');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D9', 'Dublin 9');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D10', 'Dublin 10');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D11', 'Dublin 11');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D12', 'Dublin 12');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D13', 'Dublin 13');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D14', 'Dublin 14');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D15', 'Dublin 15');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D16', 'Dublin 16');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D17', 'Dublin 17');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D18', 'Dublin 18');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D19', 'Dublin 19');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D20', 'Dublin 20');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D21', 'Dublin 21');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D22', 'Dublin 22');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D23', 'Dublin 23');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D24', 'Dublin 24');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DN', 'Dublin');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'FE', 'Fermanagh');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'GY', 'Galway');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KY', 'Kerry');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KE', 'Kildare');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KK', 'Kilkenny');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LS', 'Laois');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LM', 'Leitrim');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LK', 'Limerick');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LD', 'Longford');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LH', 'Louth');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MO', 'Mayo');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MH', 'Meath');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MN', 'Monaghan');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'OY', 'Offaly');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'RN', 'Roscommon');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'SO', 'Sligo');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'TP', 'Tipperary');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'TY', 'Tyrone');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WD', 'Waterford');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WX', 'Wexford');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WH', 'Westmeath');
INSERT INTO `$table` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WW', 'Wicklow');
");

// End the setup
$installer->endSetup();

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
 * StudioForty9 Counties Helper Data Test
 *
 * @category    StudioForty9
 * @package     Studioforty9_Counties
 * @subpackage  Test
 * @copyright   Copyright (c) 2015 StudioForty9 (http://www.studioforty9.com)
 * @license     https://github.com/studioforty9/counties/blob/master/LICENCE BSD
 */
class Studioforty9_Counties_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{
    /** @var Studioforty9_Counties_Helper_Data */
    protected $helper;

    /**
     * Set up the helper as a class property.
     */
    public function setUp()
    {
        $this->helper = Mage::helper('studioforty9_counties');
    }

    /**
     * @test
     */
    public function is_the_module_data_installed_correctly()
    {
        $this->assertTrue($this->helper->isModuleDataInstalledCorrectly());
    }

    /**
     * Clear the helper class property.
     */
    public function tearDown()
    {
        $this->helper = null;
    }
}

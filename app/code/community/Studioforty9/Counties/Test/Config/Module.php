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
 * StudioForty9 Counties Config Test
 *
 * @category    StudioForty9
 * @package     Studioforty9_Counties
 * @subpackage  Test
 * @copyright   Copyright (c) 2015 StudioForty9 (http://www.studioforty9.com)
 * @license     https://github.com/studioforty9/counties/blob/master/LICENCE BSD
 */
class Studioforty9_Counties_Test_Config_Module extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     */
    public function is_the_module_in_the_correct_code_pool()
    {
        $this->assertModuleCodePool('community');
    }

    /**
     * @test
     */
    public function is_the_module_version_correct()
    {
        $this->assertModuleVersion('1.0.0');
    }

    /**
     * @test
     */
    public function are_helpers_are_configured_correctly()
    {
        $this->assertHelperAlias('studioforty9_counties/data', 'Studioforty9_Counties_Helper_Data');
    }

    /**
     * @test
     */
    public function is_the_resource_node_configured_correctly()
    {
        $this->assertConfigNodeContainsValue(
            'global/resources/studioforty9_counties_setup/setup/module',
            'Studioforty9_Counties'
        );
    }
}

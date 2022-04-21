<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace tool_testpluginci;

/**
 * The lib test class.
 *
 * @package     tool_testpluginci
 * @category    test
 * @copyright   2022 Marina Glancy
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class lib_test extends \advanced_testcase {

    /**
     * Test one
     *
     * @covers ::tool_testpluginci_two
     */
    public function test_something() {
        global $CFG;
        require_once($CFG->dirroot.'/admin/tool/testpluginci/lib.php');
        $this->assertEquals(1, tool_testpluginci_one());
    }

    /**
     * Test one
     *
     * @covers ::tool_testpluginci_three
     */
    public function test_something3() {
        global $CFG;
        require_once($CFG->dirroot.'/admin/tool/testpluginci/lib.php');
        $this->assertEquals(1, tool_testpluginci_one());
    }
}

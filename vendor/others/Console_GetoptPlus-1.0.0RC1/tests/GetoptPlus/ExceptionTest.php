<?php
/**
 * Console GetoptPlus/Exception tests
 *
 * PHP version 5
 *
 * All rights reserved.
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 * + Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 * + Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 * + The names of its contributors may not be used to endorse or
 * promote products derived from this software without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
 * LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  PHP
 * @package   Console_GetoptPlus
 * @author    Michel Corne <mcorne@yahoo.com>
 * @copyright 2008 Michel Corne
 * @license   http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @version   SVN: $Id$
 * @link      http://pear.php.net/package/Console_GetoptPlus
 */
// Call tests_GetoptPlus_ExceptionTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "tests_GetoptPlus_ExceptionTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

require_once 'Console/GetoptPlus/Exception.php';

/**
 * Test class for Console_GetoptPlus_Getopt.
 * Generated by PHPUnit_Util_Skeleton on 2007-05-17 at 11:00:39.
 *
 * @category  PHP
 * @package   Console_GetoptPlus
 * @author    Michel Corne <mcorne@yahoo.com>
 * @copyright 2008 Michel Corne
 * @license   http://www.opensource.org/licenses/bsd-license.php The BSD License
 * @version   Release:@package_version@
 * @link      http://pear.php.net/package/Console_GetoptPlus
 */
class tests_GetoptPlus_ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main()
    {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite = new PHPUnit_Framework_TestSuite("Console_GetoptPlus_ExceptionTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown()
    {
    }

    /**
     * Tests exception
     */
    public function testException()
    {
        // format: <exception ID and parameters>, <expected exception code and message>
        $test = array(// /
            array(array('foo'), array(1, 'Console_Getopt: unknown error ID (foo)')),
            array(array('mandatory', 'foo'), array(11, 'Console_Getopt: option requires an argument --foo')),
            array(array('noargs'), array(13, 'Console_Getopt: Could not read cmd args (register_argc_argv=Off?)')),
            );

        foreach($test as $idx => $values) {
            list($exception, $expected) = $values;
            // triggers the exception and catches the expected exception
            try {
                throw new Console_GetoptPlus_Exception($exception);
            }
            catch(Console_GetoptPlus_Exception $e) {
                $result = array($e->getCode(), $e->getMessage());
            }
            $this->assertEquals($expected, $result , 'test #' . $idx);
        }
    }
}
// Call tests_GetoptPlus_ExceptionTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "tests_GetoptPlus_ExceptionTest::main") {
    tests_GetoptPlus_ExceptionTest::main();
}

?>

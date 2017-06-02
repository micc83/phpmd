<?php
/**
 * This file is part of PHP Mess Detector.
 *
 * Copyright (c) Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Licensed under BSD License
 * For full copyright and license information, please see the LICENSE file.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Manuel Pichler <mapi@phpmd.org>
 * @copyright Manuel Pichler. All rights reserved.
 * @license https://opensource.org/licenses/bsd-license.php BSD License
 * @link http://phpmd.org/
 */

namespace PHPMD\Regression;

use PHPMD\Rule\UnusedFormalParameter;
use PHPMD\RuleSet;

/**
 * Regression test for issue 14990109.
 *
 * @author Manuel Pichler <mapi@phpmd.org>
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license https://opensource.org/licenses/bsd-license.php BSD License
 * @link       https://www.pivotaltracker.com/story/show/14990109
 * @since      1.1.0
 *
 * @ticket 14990109
 * @covers \stdClass
 * @group phpmd
 * @group phpmd::regression
 * @group regressiontest
 */
class UnusedParameterArgvTicket14990109Test extends AbstractTest
{
    /**
     * testRuleDoesNotApplyToFunctionParameterNamedArgv
     *
     * @return void
     */
    public function testRuleDoesNotApplyToFunctionParameterNamedArgv()
    {
        $ruleSet = new RuleSet();
        $ruleSet->addRule(new UnusedFormalParameter());
        $ruleSet->setReport($this->getReportMock(0));

        $ruleSet->apply($this->getFunction());
    }

    /**
     * testRuleDoesNotApplyToMethodParameterNamedArgv
     *
     * @return void
     */
    public function testRuleDoesNotApplyToMethodParameterNamedArgv()
    {
        $ruleSet = new RuleSet();
        $ruleSet->addRule(new UnusedFormalParameter());
        $ruleSet->setReport($this->getReportMock(0));

        $ruleSet->apply($this->getMethod());
    }
}

<?php

/**
 * Class Aoe_Tests_Performance_CollectionCountUnitTest
 */
class Aoe_Tests_Performance_CollectionCountUnitTest extends AbstractSniffUnitTest
{
    public function getErrorList()
    {
        return [];
    }

    public function getWarningList()
    {
        return array(
            '8'  => 1,
            '10' => 1,
        );
    }
}

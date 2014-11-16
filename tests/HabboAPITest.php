<?php

class HabboAPITest extends PHPUnit_Framework_TestCase {

    /** @var \HabboAPI\HabboAPI $habboAPI */
    protected $habboAPI;

    protected function setUp()
    {
        $this->habboAPI = new HabboAPI\HabboAPI();
    }

    public function testGetHabboReturnsHabboEntity() {
        $actual = $this->habboAPI->getHabbo('koeientemmer');
        $this->assertInstanceOf("HabboAPI\\Entities\\Habbo", $actual);
    }

    public function testGetHabboSelectedBadgesReturnsBadgeEntity() {
        $actual = $this->habboAPI->getHabbo('koeientemmer')->getSelectedBadges();
        $this->assertInstanceOf("HabboAPI\\Entities\\Badge", $actual[0]);
    }

    public function testGetProfileShouldHaveFiveSections() {
        $actual = $this->habboAPI->getProfile('hhus-9cd61b156972c2eb33a145d69918f965');
        $this->assertEquals(5, count($actual));
    }
}
 
<?php
namespace Tests;

require_once(__DIR__ . '/../src/Models/checkRequest.php');

class LexigramTest extends BaseTestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testRoutes($url) {
        $response = $this->runApp("POST", '/api/Lexigram/'.$url);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function dataProvider() {
        return [
            ['search'],
            ['getConcept'],
            ['getConceptAncestors'],
            ['getConceptDescendants'],
            ['extractEntities'],
            ['highlightEntities'],
        ];
    }
}
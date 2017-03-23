<?php
$routes = [
    'search',
    'getConcept',
    'getConceptAncestors',
    'getConceptDescendants',
    'extractEntities',
    'highlightEntities',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}


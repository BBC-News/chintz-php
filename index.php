<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/StaticLibraryCompositor.php';
require_once __DIR__.'/FileSystemAliasLoader.php';

$compositor = new StaticLibraryCompositor();
$elementA = $compositor
    ->prepare('elementA')
    ->render(array(
        'title' => 'Static Library Rendering Demo',
        'subtitle' => 'Made up person',
        'items' => array(
            array(
                'name' => 'bobbins',
                'occupation' => 'philosopher'
            ),
            array(
                'name' => 'bobbinella',
                'occupation' => 'scientist'
            )
        )
    ));

?>
<!doctype html>
<html>
<head>
    <style type="text/css">
        <?= $compositor->rawCSS() ?>
    </style>
</head>
<body>
    <?= $elementA ?>
</body>
</html>
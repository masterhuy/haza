<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJm7dswk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJm7dswk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJm7dswk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJm7dswk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJm7dswk\appProdProjectContainer([
    'container.build_hash' => 'Jm7dswk',
    'container.build_id' => '92f6b41d',
    'container.build_time' => 1569916502,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJm7dswk');
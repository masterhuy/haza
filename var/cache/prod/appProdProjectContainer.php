<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUln6f45\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUln6f45/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUln6f45.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUln6f45\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUln6f45\appProdProjectContainer([
    'container.build_hash' => 'Uln6f45',
    'container.build_id' => 'b60d0220',
    'container.build_time' => 1585551157,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUln6f45');

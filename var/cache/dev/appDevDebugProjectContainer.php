<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRvl0dcx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRvl0dcx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRvl0dcx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRvl0dcx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRvl0dcx\appDevDebugProjectContainer([
    'container.build_hash' => 'Rvl0dcx',
    'container.build_id' => '824ea679',
    'container.build_time' => 1583132990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRvl0dcx');

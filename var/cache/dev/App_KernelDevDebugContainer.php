<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerODm71QH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerODm71QH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerODm71QH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerODm71QH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerODm71QH\App_KernelDevDebugContainer([
    'container.build_hash' => 'ODm71QH',
    'container.build_id' => 'e53712e9',
    'container.build_time' => 1584026182,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerODm71QH');

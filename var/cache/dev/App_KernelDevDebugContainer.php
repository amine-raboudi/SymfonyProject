<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUefsxn8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUefsxn8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUefsxn8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUefsxn8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUefsxn8\App_KernelDevDebugContainer([
    'container.build_hash' => 'Uefsxn8',
    'container.build_id' => 'cea0fe4f',
    'container.build_time' => 1640264821,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUefsxn8');
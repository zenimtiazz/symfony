<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAAS6rdD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAAS6rdD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAAS6rdD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAAS6rdD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAAS6rdD\App_KernelDevDebugContainer([
    'container.build_hash' => 'AAS6rdD',
    'container.build_id' => 'f4fdc493',
    'container.build_time' => 1641824200,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAAS6rdD');

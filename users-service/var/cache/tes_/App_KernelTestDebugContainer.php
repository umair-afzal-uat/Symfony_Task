<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXGxb4Gi\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXGxb4Gi/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerXGxb4Gi.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerXGxb4Gi\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerXGxb4Gi\App_KernelTestDebugContainer([
    'container.build_hash' => 'XGxb4Gi',
    'container.build_id' => 'cd9ea048',
    'container.build_time' => 1722525875,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXGxb4Gi');

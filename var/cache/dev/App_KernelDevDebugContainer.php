<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPJt9NTy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPJt9NTy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPJt9NTy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPJt9NTy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPJt9NTy\App_KernelDevDebugContainer([
    'container.build_hash' => 'PJt9NTy',
    'container.build_id' => 'bc8f35c9',
    'container.build_time' => 1705603474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPJt9NTy');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD83yFnx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD83yFnx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD83yFnx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD83yFnx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerD83yFnx\App_KernelDevDebugContainer([
    'container.build_hash' => 'D83yFnx',
    'container.build_id' => '3fb067fd',
    'container.build_time' => 1705056207,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD83yFnx');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4883Ysu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4883Ysu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4883Ysu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4883Ysu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4883Ysu\App_KernelDevDebugContainer([
    'container.build_hash' => '4883Ysu',
    'container.build_id' => '45e69ed7',
    'container.build_time' => 1703229588,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4883Ysu');

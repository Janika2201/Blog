<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7T6oTtJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7T6oTtJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7T6oTtJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7T6oTtJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7T6oTtJ\App_KernelDevDebugContainer([
    'container.build_hash' => '7T6oTtJ',
    'container.build_id' => 'b6eaf56a',
    'container.build_time' => 1622055750,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7T6oTtJ');

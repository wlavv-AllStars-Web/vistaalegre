<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container30ix16F\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container30ix16F/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container30ix16F.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container30ix16F\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container30ix16F\appAppKernelProdContainer([
    'container.build_hash' => '30ix16F',
    'container.build_id' => 'b505b579',
    'container.build_time' => 1714995345,
], __DIR__.\DIRECTORY_SEPARATOR.'Container30ix16F');

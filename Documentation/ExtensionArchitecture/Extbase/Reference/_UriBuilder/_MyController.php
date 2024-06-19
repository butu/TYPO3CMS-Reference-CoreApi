<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller\MyController;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

final class MyController extends ActionController
{
    public function myAction(): ResponseInterface
    {
        $url = $this->uriBuilder
            ->reset()
            ->setTargetPageUid(42)
            ->uriFor(
                'anotherAction',
                [
                    'myRecord' => 21,
                ],
                'My', // when the name of your class is MyController
                'myextension', // no underlines
                'myplugin',
            );

        // do something with $url
    }
}

<?php

namespace HimaMage\ReplaceConstrutorArgu\ViewModel;

use HimaMage\ReplaceConstrutorArgu\Model\DefaultName;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements  ArgumentInterface
{
    private DefaultName $defaultName;

    /**
     * @param DefaultName $defaultName
     */
    public function __construct(DefaultName $defaultName)
    {
        $this->defaultName = $defaultName;
    }


    public function getName()
    {
        return $this->defaultName->getName();
    }
}

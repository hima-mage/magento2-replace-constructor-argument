<?php

namespace HimaMage\ReplaceConstrutorArgu\Model;

class UpperCaseName extends DefaultName
{
    public function getName()
    {
        return strtoupper(parent::getName()); // TODO: Change the autogenerated stub
    }

}

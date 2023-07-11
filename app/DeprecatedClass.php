<?php

namespace App;

class DeprecatedClass implements \JsonSerializable
{

    /**
     * @deprecated
     * Should have ReturnTypeWIllChange but let's pretend it's a vendor library.
     */
    public function jsonSerialize()
    {
        return null;
    }
}
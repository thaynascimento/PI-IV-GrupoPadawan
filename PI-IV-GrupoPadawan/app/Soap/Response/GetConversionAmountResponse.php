<?php

/**
 * Created by PhpStorm.
 * User: laravel-homestead
 * Date: 03/06/2017
 * Time: 17:32
 */

namespace App\Soap\Response;

class GetConversionAmountResponse
{
    /**
     * @var string
     */
    protected $GetConversionAmountResult;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($GetConversionAmountResult)
    {
        $this->GetConversionAmountResult = $GetConversionAmountResult;
    }

    /**
     * @return string
     */
    public function getGetConversionAmountResult()
    {
        return $this->GetConversionAmountResult;
    }
}
<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stoShipmentResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class StoShipmentResponse extends AbstractStructBase
{
    /**
     * The stoShipmentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $stoShipmentResult;

    /**
     * Constructor method for stoShipmentResponse
     *
     * @uses StoShipmentResponse::setStoShipmentResult()
     *
     * @param string $stoShipmentResult
     */
    public function __construct($stoShipmentResult = null)
    {
        $this
            ->setStoShipmentResult($stoShipmentResult);
    }

    /**
     * Get stoShipmentResult value
     *
     * @return string|null
     */
    public function getStoShipmentResult()
    {
        return $this->stoShipmentResult;
    }

    /**
     * Set stoShipmentResult value
     *
     * @param string $stoShipmentResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\StoShipmentResponse
     */
    public function setStoShipmentResult($stoShipmentResult = null)
    {
        // validation for constraint: string
        if (!is_null($stoShipmentResult) && !is_string($stoShipmentResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stoShipmentResult)), __LINE__);
        }
        $this->stoShipmentResult = $stoShipmentResult;

        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\StoShipmentResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

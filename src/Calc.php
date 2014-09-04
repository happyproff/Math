<?php



namespace happyproff\Math;



/**
 * Class Calc
 */
class Calc {



    /**
     * @var bool
     */
    protected $strict = false;



    /**
     * @return bool
     */
    public function getStrict () {

        return $this->strict;

    }



    /**
     * @param $strict
     *
     * @throws \InvalidArgumentException
     */
    public function setStrict ($strict) {

        if (!is_bool($strict)) {
            throw new \InvalidArgumentException('$strict must be bool');
        }

        $this->strict = $strict;

    }



    /**
     * @param int|float $arg1
     * @param int|float $arg2
     *
     * @return int|float
     * @throws \InvalidArgumentException
     */
    public function plus ($arg1, $arg2) {

        if ($this->strict) {
            if (intval($arg1) !== $arg1 or floatval($arg1) !== $arg1) {
                throw new \InvalidArgumentException('$arg1 must be int or float');
            }
            if (intval($arg2) !== $arg2 or floatval($arg2) !== $arg2) {
                throw new \InvalidArgumentException('$arg2 must be int or float');
            }
        }

        $result = $arg1 + $arg2;

        return $result;

    }



    /**
     * @param int|float $arg1
     * @param int|float $arg2
     *
     * @return int|float
     * @throws \InvalidArgumentException
     */
    public function minus ($arg1, $arg2) {

        if ($this->strict) {
            if (intval($arg1) !== $arg1 or floatval($arg1) !== $arg1) {
                throw new \InvalidArgumentException('$arg1 must be int or float');
            }
            if (intval($arg2) !== $arg2 or floatval($arg2) !== $arg2) {
                throw new \InvalidArgumentException('$arg2 must be int or float');
            }
        }

        $result = $arg1 - $arg2;

        return $result;

    }



}
 
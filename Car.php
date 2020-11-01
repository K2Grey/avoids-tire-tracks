<?php


class Car
{
    /**
     * @var bool
     */
    private $hasParkBrake;

    /**
     * Car constructor.
     */
    public function __construct()
    {
        $this->setParkBrake(1);
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function start()
    {
        if ($this->hasParkBrake)
            throw new Exception("Vous avez oublié le frein à main");
        return $this;
    }

    /**
     * @return bool
     */
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     * @return $this
     */
    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }
}
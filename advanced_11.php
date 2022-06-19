<?php

interface Taxi
{
    public function getModel(): string;
    public function getPrice(): float;
}

class Econom implements Taxi
{
    public function getModel(): string
    {
        // TODO: Implement getModel() method.
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }
}

class Standart implements Taxi
{
    public function getModel(): string
    {
        // TODO: Implement getModel() method.
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }
}

class Lux implements Taxi
{
    public function getModel(): string
    {
        // TODO: Implement getModel() method.
    }

    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }
}

abstract class TypeTaxi
{
    public abstract function getTaxi(): Taxi;

    public function deliver()
    {
        $delivery = $this->getTaxi();
        $delivery->getModel();
        $delivery->getPrice();
    }
}

class EconomTaxi extends TypeTaxi
{
    public function getTaxi(): Taxi
    {
        return new Econom();
    }
}

class StandartTaxi extends TypeTaxi
{
    public function getTaxi(): Taxi
    {
        return new Standart();
    }
}

class LuxTaxi extends TypeTaxi
{
    public function getTaxi(): Taxi
    {
        return new Lux();
    }
}

function clientCode(TypeTaxi $typeTaxi)
{
    $typeTaxi->deliver();
}
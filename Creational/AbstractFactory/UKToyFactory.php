<?php

class UKToyFactory implements ToyFactory
{
    private $location = "United Kingdom";

    public function makeMaze()
    {
        return new Toys\UKMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\UKPuzzleToy();
    }
}
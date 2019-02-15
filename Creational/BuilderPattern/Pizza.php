<?php

require_once('PizzaBuilder.php');

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;
    }

    public function show(): String
    {
        $recipe = "$this->size inch pizza with the following toppings: ";
        $recipe .= $this->cheese ? "cheese, " : "";
        $recipe .= $this->pepperoni ? "pepperoni, " : "";
        $recipe .= $this->bacon ? "bacon, " : "";

        return $recipe;
    }
}
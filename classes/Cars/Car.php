<?php


namespace Cars;


class Car
{
    public string $name;
    public string $color;
    public string $price;

    public function __construct(string $name, string $color, int $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function showInfo(): string
    {
        return (
        "<tr>
             <td>$this->name</td>
             <td>$this->color</td>
             <td>$this->price</td>
         </tr>"
        );
    }

    public function changeColor(string $color): string
    {
        return $this->color = $color;
    }
}
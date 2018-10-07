<?php

class Logic {
    private $struct;

    public function __construct($struct)
    {
        $this->struct = $struct;
    }

    //Добавить нового удава
    //Убить удава
    //Подвинуть удава на одну клетку
    //Сменить удаву направление движения

    private function getSnake($id)
    {

        if ($id) {
            $snakes = $this->struct->snakes;
            foreach ($snakes as $snake) {
                if ($snake->id === $id) {
                    return $snake;
                }
            }
        }
    }

    public function ChangeDirection($id, $direction)
    {
        $snake = $this->getSnake($id);
        if ($snake && $direction) {
            $snake->direction = $direction;
            return true;
        }
    }
    //Съесть еду
    //Съесть другово удава
    //Добавить новую еду на карту
}
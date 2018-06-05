<?php // php version 5.6

class Application       
{
    public $array;
    public $element;

    function __construct(array $array, $element)
    {
        $this->array = $array;
        $this->element = $element;
    }

    function createArray($start, $end)
    {
        $this->array = range($start, $end);
    }


    function sortArr($text, array $numbers, $value) // вывод массива на экран в цикле
    {
        echo $text;

        for ($i=0; $i<count($numbers); $i++)
        {
            // условие для выделения нужного элемента
            ($numbers[$i] == $value)? print_r("<strong>".$numbers[$i]."</strong>_"): print_r($numbers[$i]."_");

            if ($i == count($numbers)-1)
            {
                echo "<br>";
            }
        }
    }

    function binarySearch(array $numbers, $value) // функция бинарного поиска
    {
        sort($numbers);
        $first = 0;
        $last = count($numbers)-1;

        $result = false;

        while ($first <= $last && !$result)
        {
            $middle = (int)round(($first + $last)/2);

            if ($numbers[$middle] == $value)
            {
                $result = true;
                echo "Значение:  $value существует и его порядковый номер = $middle  <br><br>";
            }
            elseif ($numbers[$middle] < $value)
            {
                $first = $middle + 1;
            }
            else
            {
                $last = $middle - 1;
            }
        }
        if (!$result)
        {
            echo " Значение: $value не найдено <br><br>";
        }
    }
}

$Application = new Application([3,2,1,7,8,3],2);
/*$Application->createArray(0,1000);  если действительно нужно вывести 1000 элементов */
$Application->sortArr("Отрисованный массив ", $Application->array, $Application->element);
$Application->binarySearch($Application->array, $Application->element);

<?

class WorkerThree extends WorkerTwo
{
    
    public function __construct($name, $age, $salary)
    {
        echo $age * $salary;
    }

}

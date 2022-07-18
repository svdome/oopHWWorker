<?
class WorkerTwo 
{
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
       return $this->salary; 
    }
    public function setName($name)
    {
        $this->name=$name;
    } 

    public function setAge($age)
    {
        if($this->checkAge($age))
        $this->age = $age;
    }
    
    public function setSalary($salary)
    {
        $this->salary=$salary;
    }

    private function checkAge($age)
    {
        return $age >= 1 and $age <= 100;
    }
}

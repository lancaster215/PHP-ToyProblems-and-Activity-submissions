<?php
declare(strict_types=1);
interface IProject
{
    public function iClient();
    public function myProjectManager();
    public function yearDeployed();
    public function bultInVersion();
    public function technologyStack();
    public function developers();
}

class Details implements IProject
{
    // public $projectName = "Boom.Camp Portal V1.0.0";
    public function iClient($name="Glenn Perez") :? String{
        return $name;
    }
    public function myProjectManager($manager="Scrum Master") :? String{
        echo "<br>";
        return $manager;
    }
    public function yearDeployed($yr=2019) :? Int{
        echo "<br>";
        return $yr;
    }
    public function bultInVersion($version=1) :? int{
        echo "<br>";
        return $version;
    }
    public function technologyStack($stack = array("style" => "css", "responsiveness" => "javascript")) :? array{
        echo "<br>";
        return $stack;
    }
    public function developers($devteam = array("frontend" => "Vanessa Dulva", "backend" => "Marcial Norte", "DB" => "Vincent Serra")) :? array{
        echo "<br>";
        return $devteam;
    }
}

$details = new Details();

echo $details->iClient();
echo $details->myProjectManager();
echo $details->yearDeployed();
echo $details->bultInVersion();
var_dump($details->technologyStack());
var_dump($details->developers());
?>

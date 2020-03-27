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
    public const projectName = "Boom.Camp Portal V1.0.0";
}

class Details implements IProject
{
    public function projectName() :? String{
        return IProject::projectName;
    }
    public function iClient(String $name="Glenn Perez") :? String{
        echo "<br>";
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

echo $details->projectName();
echo $details->iClient();
echo $details->myProjectManager();
echo $details->yearDeployed();
echo $details->bultInVersion();
var_dump($details->technologyStack());
var_dump($details->developers());
?>


<?php
define('ENUM_RATINGS', array(
    "Needs more improvement",
    "Failed in Boom.Camp Training",
    "Pass in Boom.Camp and can proceed in Graduation",
));

function compareIfPass($a, $b){
    $compare = $a <=> $b;
    switch($compare){
        case 0:
            echo ENUM_RATINGS[0]."<br>";
            break;
        case -1:
            echo ENUM_RATINGS[1]."<br>";
            break;
        case 1:
            echo ENUM_RATINGS[2]."<br>";
            break;
        default:
            "Work hard 'till you accomplish anything";
            break;
    }
}
compareIfPass(90,80);
compareIfPass(80,90);
compareIfPass(90,90);
?>

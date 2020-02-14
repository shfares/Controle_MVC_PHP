<?php
class EmployeeController {
    public function construct(){}

    public function index() {
      $this->list();
    }
    public function list(){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      $employees=$m->listAll();
      // Affichage au sein de la vue des données récupérées via le model
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->setVar('employeelist',$employees);
      $v->render('employee','list');
    }
    public function view($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      if ($employee=$m->listOne($id)) $v->setVar('e',$employee);
      // Affichage au sein de la vue des données récupérées via le model
      $v->render('employee','view');
    }
    public function edit($id=null){
      //die('modification d\'un employé');
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      if(isset($_POST["EmployeeID"])){

        if($m->updateEmploye($_POST["EmployeeID"],$_POST["NationalIDNumber"],$_POST["LoginID"],
        $_POST["MaritalStatus"],$_POST["Gender"],$_POST["VacationHours"],$_POST["SickLeaveHours"],
        $_POST["EmailAddress"],$_POST["EmailPromotion"]))
        {
          $this->index();
          //$v->render('home','index');
        }
      }
      else{
        $employee=$m->listOne($id);
        $v->setVar('e',$employee);
      // Affichage au sein de la vue des données récupérées via le model
      $v->render('employee','edit');
    }
    }
    public function delete($id=null){
      //die('suppression d\'un employé');
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      
      if(isset($id) && ($id != null)){
        
        $m->deleteEmploye($id);
        //$v->render('home','list');
        //
      }
      //$v->render('employee','list');
      $this->index();
    }

    public function add(){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->render('employee','add');

    }

}
?>
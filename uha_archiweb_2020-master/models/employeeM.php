<?php
class EmployeeModel {
    public function construct(){}
    public function listAll(){
      $sql='select E.EmployeeID, C.ContactID, E.NationalIDNumber,E.Title as ETitle, C.Title as CTitle, 
      C.FirstName, C.MiddleName, C.LastName, C.EmailAddress, E.HireDate
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventure_work;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        //$stmt->bindParam(":var",$var);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return $res;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
    public function listOne($id){
      $sql='select E.*, C.*,E.Title as ETitle, C.Title as CTitle, EM.Title as EMTitle, CM.Title as CMTitle, CM.FirstName as CMFirstName, CM.MiddleName as CMMiddleName, CM.LastName as CMLastName
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID
      left join employee as EM on E.ManagerID=EM.EmployeeID
      left join contact as CM on EM.ContactID=CM.ContactID
      where E.EmployeeID=:id';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventure_work;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(":id",$id);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return current($res);
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
    public function updateEmploye($EmployeeID,$NationalIDNumber,$LoginID,$MaritalStatus,$Gender,$VacationHours,$SickLeaveHours,$EmailAddress,$EmailPromotion){

     
      $Employe = EmployeeModel::listOne($EmployeeID);
        $sql='UPDATE employee inner JOIN contact 
        ON contact.ContactID="'.$Employe->ContactID.'"
        SET employee.NationalIDNumber="'.$NationalIDNumber.'", employee.Gender="'.$Gender.'", employee.LoginID="'.$LoginID.'", employee.VacationHours="'.$VacationHours.'", employee.MaritalStatus="'.$MaritalStatus.'", employee.SickLeaveHours="'.$SickLeaveHours.'", contact.EmailPromotion="'.$EmailPromotion.'", contact.EmailAddress="'.$EmailAddress.'" 
        WHERE employee.ContactID ="'.$Employe->ContactID.'"';

      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventure_work;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        //$stmt->bindParam(":id",$EmployeeID);
        //$stmt->bindParam(":ni",$NationalIDNumber);
        //$stmt->bindParam(":li",$LoginID);
        //$stmt->bindParam(":g",$Gender);
        //$stmt->bindParam(":vh",$VacationHours);
        //$stmt->bindParam(":ms",$MaritalStatus);
        //$stmt->bindParam(":slh",$SickLeaveHours);
        //$stmt=$dbh->prepare($sql2);
        //$stmt->bindParam(":ep",$EmailPromotion);
        //$stmt->bindParam(":ea",$EmailAddress);
        //$stmt->bindParam(":idContact",$Employe->ContactID);
        //die(print_r($stmt));
        return $stmt->execute();
        $dbh = null;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }

    public function deleteEmploye($EmployeeID){
      $Employe = EmployeeModel::listOne($EmployeeID);
      $sql='DELETE employee , contact FROM employee  
      INNER JOIN contact 
      WHERE employee.ContactID="'.$Employe->ContactID.'" AND contact.ContactID= "'.$Employe->ContactID.'"';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adventure_work;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        return $stmt->execute();
        $dbh = null;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
}
?>
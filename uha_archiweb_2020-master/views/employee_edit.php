<?php
function fAge($date)
{
  $datetime1 = new DateTime("today");
  $datetime2 = new DateTime($date);
  $interval = $datetime2->diff($datetime1);
  return $interval->format('%y');
}  ?>
<main role="main" class="container">
  <div class="starter-template">
    <h1>Affichage d'un employé</h1>
  </div>

  <br />
  <div class="row">
    <h3>
      <?php if (isset($e->EmployeeID)) echo '(' . $e->EmployeeID . ') '; ?>
      <?php if (isset($e->CTitle)) echo $e->CTitle . ' '; ?>
      <?php if (isset($e->FirstName)) echo $e->FirstName . ' '; ?>
      <?php if (isset($e->MiddleName)) echo $e->MiddleName . ' '; ?>
      <?php if (isset($e->LastName)) echo $e->LastName . ' '; ?>
      <?php if (isset($e->Suffix)) echo $e->Suffix; ?>
    </h3>
  </div>
  <form method="POST" action="">
    <div class="form-group">
    <div class="row">
        <label class="col-md-4 control-label">Employe ID :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="EmployeeID" value="<?php if (isset($e->EmployeeID)) echo $e->EmployeeID; ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Numéro sécurité sociale :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="NationalIDNumber" value="<?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">LoginID :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="LoginID" value="<?php if (isset($e->LoginID)) echo $e->LoginID;  ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Statut marital :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="MaritalStatus" value="<?php if (isset($e->MaritalStatus)) echo $e->MaritalStatus;  ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Sexe :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="Gender" value="<?php if (isset($e->Gender)) echo $e->Gender;  ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Nombre d'heure de vacances :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="VacationHours" value="<?php if (isset($e->VacationHours)) echo $e->VacationHours;  ?>">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Nombre d'heure de maladie :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="SickLeaveHours" value="<?php if (isset($e->SickLeaveHours)) echo $e->SickLeaveHours;  ?>"> </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Adresse mail :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="EmailAddress" value="<?php if (isset($e->EmailAddress)) echo $e->EmailAddress;  ?>"> </div>
      </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">EmailPromotion :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="EmailPromotion" value="<?php if (isset($e->EmailPromotion)) echo $e->EmailPromotion;  ?>"> </div>
    </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Téléphone :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="Phone" value="<?php if (isset($e->Phone)) echo $e->Phone;  ?>"> </div>
    </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Poste occupé :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="ETitle" value="<?php if (isset($e->ETitle)) echo $e->ETitle;  ?>"> </div>
    </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Manager :</label>
      <div class="col-md-8">
        <?php if (isset($e->CMTitle)) echo $e->CMTitle; ?>
        <?php if (isset($e->CMFirstName)) echo ' ' . $e->CMFirstName; ?>
        <?php if (isset($e->CMMiddleName)) echo ' ' . $e->CMMiddleName; ?>
        <?php if (isset($e->CMLastName)) echo ' ' . $e->CMLastName; ?>
        <?php if (isset($e->EMTitle)) echo ' (' . $e->EMTitle . ')'; ?>
        <?php if (isset($e->ManagerID)) echo ' <a href="index.php?c=employee&m=view&id=' . $e->ManagerID . '" class="btn btn-success btn-sm" data-toggle="tooltip" title="Modifier l\'employé"><i class="fas fa-eye"></i> Voir</a>'; ?>
      </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Dernière modification :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="Phone" value="<?php if (isset($e->ModifiedDate)) echo $e->ModifiedDate;  ?>" disabled>
      </div>
    </div>
    <div class="row">
      <!--
      <a href="index.php?c=employee&m=editView"> 
        <?php //if (isset($e->EmployeeID)) echo '<a href="index.php?c=employee&m=edit" data-toggle="tooltip" title="Valider" class="btn btn-block btn-success"><i class="fas fa-trash-alt"></i></a>';?>
      </a>
      -->
    </div>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Update">
  </form>
</main><!-- /.container -->
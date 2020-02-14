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
    </h3>
  </div>
  <form method="POST" action="">
    <div class="form-group">
    <div class="row">
        <label class="col-md-4 control-label">First Name :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="FirstName">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Middle Name :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="MiddleName">
        </div>
      </div>      
      <div class="row">
        <label class="col-md-4 control-label">Last Name :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="LastName">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Employe ID :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="EmployeeID">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Numéro sécurité sociale :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="NationalIDNumber">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">LoginID :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="LoginID">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Statut marital :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="MaritalStatus">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Sexe :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="Gender">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Nombre d'heure de vacances :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="VacationHours">
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Nombre d'heure de maladie :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="SickLeaveHours"> 
        </div>
      </div>
      <div class="row">
        <label class="col-md-4 control-label">Adresse mail :</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="EmailAddress">
        </div>
      </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">EmailPromotion :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="EmailPromotion">
    </div>
    </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Téléphone :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="Phone">
    </div>
    </div>
    </div>
    <div class="row">
      <label class="col-md-4 control-label">Poste occupé :</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="ETitle"> 
    </div>
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
    <input type="submit" name="submit" class="btn btn-success" value="Valider">
  </form>
</main><!-- /.container -->
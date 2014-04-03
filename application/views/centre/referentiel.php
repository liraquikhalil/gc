

<style>
    
    .btn-primary{
        float:left; 
        width: 200px; 
        margin-left: 35px;
        
    }
    
     th{text-align:center;}
    td{text-align:center;}

</style>





<ul class="nav nav-tabs" >
    <li class="active"><a href="#typeLieu" data-toggle="tab">type lieu</a></li>
    <li><a href="#gestionBien" data-toggle="tab">Gestion des Biens</a></li>
    <li><a href="#tab_c" data-toggle="tab">Gestion des Resseource humaine</a></li>
</ul>




    
 <?php     
 //********************************************************   
 //                   Types Lieux                  **
 //********************************************************  
 ?>



<div class="col-sm-3"></div>
<div class="tab-content col-sm-6">
    <div class="tab-pane active" id="typeLieu">
      
        
        <table name="listeC" id="listeL" class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>الإسم</th>
                    <th><a data-toggle="modal" data-target="#myModal" style="float: center; margin-right: 30px; " class="btn btn-primary" href="<?= base_url('centre/ajoutReferentiel'); ?>"> إضافة</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($typeLieux as $typeLieu): ?>
                    <tr>
                        <td> <?= $typeLieu['libelle'] ?></td> 
                        <td>
                        <a class='btn btn-danger' href="<?= base_url('centre/deleteRefentiel/'.$typeLieu['typeLieuID']); ?>"> حدف</a>
                        <a  class='btn btn-warning' href="<?= base_url('centre/updateReferentiel/'.$typeLieu['typeLieuID']); ?>"> تغيير</a>
                        </td>
                    </tr>

<?php endforeach ?>
            </tbody>

        </table>

        
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
          <label  class="col-sm-5 control-label" >الإسم</label>
        <div class="col-sm-5">
            <input  class="form-control" name="quantiteTotal" >
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
        

    </div>
    
    
    
    
    
    
    
    
    
 <?php     
 //********************************************************   
 //                   Gestion des Biens                  **
 //********************************************************  
 ?>
    
    
    
    
    
    
    



    
    
    <div class="tab-pane" id="gestionBien" style="direction:ltr;">
      <center>  <div class="page-header">
        <h1>Gestion des Biens</h1>
        </div>
       </center>


<a class="btn btn-primary"  href="<?= base_url('centre/ajoutBien'); ?>" >Ajouter</a>

        <table name="listeC" id="listeC" class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>type</th>
                    <th>Date acquisition </th>
                    <th>Quatite totale</th>
                    <th>Stock</th>
                    <th>Utilise</th>
                    <th>Reforme</th>
                    <th>Provenance</th>
                    <th>Nouveau</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
<?php foreach ($biens as $bien): ?>
                    <tr>
                        <td> <?= $bien['libelle'] ?></td>
                        <td> <?= $bien['type'] ?></td>
                        <td> <?= $bien['dateAquisition'] ?></td>
                        <td> <?=$bien['quantiteTotal'];?></td>
                         <td> <?=$bien['nbrStock'];?></td>
                         <td> <?=$bien['nbrUtilise'];?></td>
                         <td> <?=$bien['nbrReforme'];?></td>
                         <td> <?= $bien['provenance'] ?></td>
                         <td> <?=$bien['nbrNouv'];?></td>
                        <td>
                        <a class='btn btn-danger' href="<?= base_url('centre/deleteBien/'.$bien['bienID']); ?>"> supprimer</a>
                        <a class='btn btn-warning' href="<?= base_url('centre/updateBien/'.$bien['bienID']); ?>"> modifier</a>
                        </td>
                    </tr>

<?php endforeach ?>
            </tbody>

        </table>


<?php
    
 //********************************************************   
 //                      Modal                           **
 //********************************************************

?>

<!-- Modal -->
<div class="modal fade" id="ajouterBien" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
        
         <form class="form-horizontal" method="POST"  action=" <?= base_url('centre/postAjoutBien') ?> ">
      <div class="modal-body">
            
          
          
          
          
          
          
<div class="row" >
   


        <div class="col-sm-8">
            <input  class="form-control" name="numero" >
        </div>
        <label  class="col-sm-4 control-label" >الرقم</label>
        
        
        
        <div class="col-sm-8">
            <input  class="form-control" name="nom" >
        </div>
        <label  class="col-sm-4 control-label" >الإسم</label>


        <div class="col-sm-8">
            <select class="form-control" name="typeBienID">
                <?php foreach ($typeBiens as $typeBien): ?>

                    <option  value=<?php echo $typeBien->typeBienID . '>' . $typeBien->libelle; ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
        <label  class="col-sm-4 control-label"  >نوع المكون</label>


        
         <div class="col-sm-8">
            <input  class="form-control" name="etat" >
        </div>
        <label class="col-sm-4 control-label" >الحالة</label>


        


        <div class="col-sm-8">
            <input  class="form-control" name="dateAquisition" id="dateAquisition" >
        </div>
        <label class="col-sm-4 control-label" >تاريخ التسليم</label>
        
        
        <div class="col-sm-8">
            <select class="form-control" name="sexe"  value='<?= $centre->sexe ; ?>'>
                <option  value='الذكور'>هبة</option>
                <option  value='الإنات'>شراء</option>
               
            </select>
        </div>
        <label for="inputNom" class="col-sm-4 control-label">المصدر</label>
        
   
</div>  
    
          
      </div>
      <div class="modal-footer">
         <center> 
            <button  type="submit" class="btn btn-success"  >تأكيد</button>
        </center>
           
      </div></form>
    </div>
  </div>
</div>







    </div>

</div><!-- tab content -->














<link  href=" <?= base_url('assets/css/jquery.rating.css') ?>" rel="stylesheet">

<script src=" <?= base_url("assets/js/jquery.rating.js")  ?>"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<script>


    $(function() {
        $("#dateAquisition").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd" 
        });
    });

</script>



<link href=" <?= base_url('assets/css/customK.css') ?> " rel="stylesheet">

<div class="col-sm-3"></div>
<div class='row'>
<div class="col-sm-6" style='direction: ltr;'>
    <form class="form-horizontal" method="POST"  action=" <?= base_url('centre/postUpdateBien') ?> ">
   
         <input  type="hidden" name="bienID" value="<?= $bien->bienID;?>" >
        
        <label  class="col-sm-5 control-label" >Designation</label>
        <div class="col-sm-5">
            <input  class="form-control" name="libelle" value="<?= $bien->libelle; ?>" >
        </div>
        

         <label  class="col-sm-5 control-label"   >type</label>
        <div class="col-sm-5">
            <select class="form-control" name="typeBienID" id='typeBienID'>
                <?php foreach ($typeBiens as $typeBien): ?>

                    <option  value=<?php echo $typeBien->typeBienID . '>' . $typeBien->libelle; ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
         
          <label  class="col-sm-5 control-label" >Quantite Total</label>
        <div class="col-sm-5">
            <input  class="form-control" name="quantiteTotal" value="<?= $bien->quantiteTotal; ?>" >
        </div>
       

        <label  class="col-sm-5 control-label" >Nombre en stock</label>
        <div class="col-sm-5">
            <input  class="form-control" name="nbrStock" value="<?= $bien->nbrStock  ?>">
        </div>
        
        
        <label  class="col-sm-5 control-label" >Nombre utilise</label>
        <div class="col-sm-5">
            <input  class="form-control" name="nbrUtilise" value="<?= $bien->nbrUtilise  ?>" >
        </div>
        
        
        <label  class="col-sm-5 control-label" >Nombre a reforme</label>
        <div class="col-sm-5">
            <input  class="form-control" name="nbrReforme" value="<?= $bien->nbrReforme  ?>" >
        </div>
        
        
        
         <label for="inputNom" class="col-sm-5 control-label">Provenance</label>
        <div class="col-sm-5">
            <select class="form-control" name="provenance" id='provenance' >
                <option  value='M.J.S'>M.J.S</option>
                <option  value='Autorite Locale'>Autorite Locale</option>
                <option  value='I.N.D.H'>I.N.D.H</option>
                <option  value='Association'>Association</option>
                <option  value='Autre'>Autre</option>
            </select>
        </div>
       
        
        
          <label  class="col-sm-5 control-label" >Nombre nouveaux</label>
        <div class="col-sm-5">
            <input  class="form-control" name="nbrNouv" value="<?= $bien->nbrNouv  ?>" >
        </div>
       
        


          <label class="col-sm-5 control-label" >Date Acquisition</label>
        <div class="col-sm-5">
            <input  class="form-control" name="dateAquisition" id="dateAquisition" value="<?= $bien->dateAquisition  ?>" >
        </div>
        
        
</div>
</div>
        
          <div class='row'>
        <center> 
            <button type="submit" class="btn btn-success"  >Valider</button>
        </center>
              </div>
    </form>
</div>  

<div class="col-sm-4"></div>

</div>



<script>

$("#typeBienID").val("<?= $bien->typeBienID;?>");
$("#provenance").val("<?= $bien->provenance;?>");

</script>
    











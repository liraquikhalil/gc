
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

<div class="col-sm-4"></div>
<div class="col-sm-5">
    <form class="form-horizontal" method="POST"  action=" <?= base_url('centre/postAjoutBien') ?> ">


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


        
        <div class="col-sm-8"  >
            <input name="star1" type="radio" class="star"/> 
            <input name="star1" type="radio" class="star"/> 
            <input name="star1" type="radio" class="star"/> 
            <input name="star1" type="radio" class="star"/> 
            <input name="star1" type="radio" class="star"/> 
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
        
        



        <center> 
            <button type="submit" class="btn btn-success"  >تأكيد</button>
        </center>
    </form>
</div>  

<div class="col-sm-4"></div>

</div>















<link href=" <?= base_url('assets/css/customK.css') ?> " rel="stylesheet">

<div class="col-sm-4"></div>
<div class="col-sm-5">
    <form class="form-horizontal" method="POST"  action=" <?= base_url('centre/postAjoutlieu') ?> ">
        
        
        
        <div class="col-sm-8">
            <input  class="form-control" name="intitule" >
        </div>
        <label  class="col-sm-4 control-label" >الإسم</label>


        <div class="col-sm-8">
            <select class="form-control" name="typeLieuID">
                <?php foreach ($typeLieux as $typeLieu): ?>

                    <option  value=<?php echo $typeLieu->typeLieuID . '>' . $typeLieu->libelle; ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
        <label  class="col-sm-4 control-label"  >نوع الفضاء</label>


        
       <div class="col-sm-8">
            <input  class="form-control" name="nbrbeneficiaires" >
        </div>
        <label class="col-sm-4 control-label" >الحمولة</label>

        
        
        <div class="col-sm-8">
            <select class="form-control" name="etat" >
                <option  value='جيدة'>جيدة</option>
                <option  value='متوسطة'>متوسطة</option>
                <option  value='سيئة'>سيئة</option>
               
            </select>
        </div>
        <label  class="col-sm-4 control-label">الحالة</label>
        
        
         <div class="col-sm-8">
            <input  class="form-control" name="nombre" >
        </div>
        <label class="col-sm-4 control-label" >العدد</label>


        <center> 
            <button type="submit" class="btn btn-success"  >تأكيد</button>
        </center>
    </form>
</div>  

<div class="col-sm-4"></div>

</div>













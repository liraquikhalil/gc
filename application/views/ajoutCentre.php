
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<script>


    $(function() {
        $("#dateCreation").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd" 
        });
    });

</script>


<link href=" <?= base_url('assets/css/customK.css') ?> " rel="stylesheet">

<div class="col-sm-4"></div>
<div class="col-sm-5">
    <form class="form-horizontal" method="POST"  action=" <?= base_url('centre/postAjout') ?> ">


        <div class="col-sm-8">
            <input  class="form-control" name="nom" >
        </div>
        <label  class="col-sm-4 control-label" >الإسم</label>


        <div class="col-sm-8">
            <select class="form-control" name="delegation">
                <?php foreach ($delegations as $delegation): ?>

                    <option  value=<?php echo $delegation['delegationID'] . '>' . $delegation['nom']; ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
        <label  class="col-sm-4 control-label"  >النيابة</label>



        <div class="col-sm-8">
            <select class="form-control" name="nature">
                <?php foreach ($natures as $nature): ?>

                    <option  value=" <?= $nature['natureID'] ?>" > <?= $nature['libelle'] ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
        <label  class="col-sm-4 control-label" >الطبيعة</label>
        <!--        wadifa/khasiya-->



        <div class="col-sm-8">
            <input  class="form-control" name="adresse" >
        </div>
        <label  class="col-sm-4 control-label" >العنوان</label>


        <div class="col-sm-8">
            <input   class="form-control" name="tel" >
        </div>
        <label class="col-sm-4 control-label" >رقم الهاتف</label>


        <div class="col-sm-8">
            <input   class="form-control" name="capacitee" >
        </div>
        <label  class="col-sm-4 control-label" >الطاقة الإستعابية</label>



        <div class="col-sm-8">
            <select class="form-control" name="sexe" >
                <option  value='الذكور'>الذكور</option>
                <option  value='الإنات'>الإنات</option>
                 <option  value='الإنات'>الذكور و الإنات</option>
            </select>
        </div>
        <label for="inputNom" class="col-sm-4 control-label">جنس النزلاء</label>




        <div class="col-sm-8">
            <input  class="form-control" name="dateCreation" id="dateCreation" >
        </div>
        <label class="col-sm-4 control-label" >تاريخ الإنشاء</label>



        <div class="col-sm-8">
            <select class="form-control" name="statut" >
                <?php foreach ($statuts as $statut): ?>

                    <option  value=<?php echo $statut['statutID'] . '>' . $statut['libelle']; ?> </option>

                <?php endforeach; ?>
            </select>
        </div>
        <label for="inputNom" class="col-sm-4 control-label"   >الوضعية</label>



        <div class="col-sm-8">
            <input  class="form-control" name="superficie" >
        </div>
        <label  class="col-sm-4 control-label" >المساحة</label>



        <center> 
            <button type="submit" class="btn btn-success"  >تأكيد</button>
        </center>
    </form>
</div>  

<div class="col-sm-4"></div>

</div>













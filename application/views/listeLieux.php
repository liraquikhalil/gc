

<script src=" <?= base_url('assets/js/jquery.dataTables.js') ?> "></script>
<script src=" <?= base_url('assets/media/js/TableTools.js') ?> "></script>
<script src=" <?= base_url('assets/media/js/ZeroClipboard.js') ?> "></script>

<link href=" <?= base_url('assets/css/dataTable.css') ?> " rel="stylesheet">
<link href=" <?= base_url('assets/media/css/TableTools.css') ?> " rel="stylesheet">

<style>
    .star{width: 80px;
          height: 25px;

    }

</style>

<script>

    $(document).ready(function() {


        $('#listeC').dataTable({
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false,
            "oLanguage": {
                "sSearch": "بحث : "},
            "sDom": 'T<"clear">lfrtip',
            "oTableTools": {
                "sSwfPath": "<?= base_url('assets/media/swf/copy_csv_xls_pdf.swf') ?>",
                "aButtons": [{
                        "sExtends": "xls",
                        "sButtonText": "Special columns",
                        "mColumns": [4, 3, 2, 1, 0]
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "print",
                        "mColumns": [0, 1, 2, 3, 4]
                    }

                ]
            }
        });
        
        $('#listeL').dataTable({
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false,
            "oLanguage": {
                "sSearch": "بحث : "},
            "sDom": 'T<"clear">lfrtip',
            "oTableTools": {
                "sSwfPath": "<?= base_url('assets/media/swf/copy_csv_xls_pdf.swf') ?>",
                "aButtons": [{
                        "sExtends": "xls",
                        "sButtonText": "Special columns",
                        "mColumns": [4, 3, 2, 1, 0]
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "print",
                        "mColumns": [0, 1, 2, 3, 4]
                    }

                ]
            }
        });
        
        
        
    });


</script>

<style>

    th{text-align:center;}
    td{text-align:center;}

</style>









<ul class="nav nav-tabs" >
    <li class="active"><a href="#gestionInfrastructure" data-toggle="tab">Gestion de l'infrastructure</a></li>
    <li><a href="#gestionBien" data-toggle="tab">Gestion des Biens</a></li>
    <li><a href="#tab_c" data-toggle="tab">Gestion des Resseource humaine</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="gestionInfrastructure">
       
           <center>  <div class="page-header">
        <h1>تسير البنية التحتية</h1>
        </div>
       </center>




        <table name="listeC" id="listeL" class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>الإسم</th>
                    <th>الحمولة</th> 
                    <th>نوع الفضاء</th>
                    <th>تاريخ الإحداث</th>
                    <th>الحالة</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lieux as $lieu): ?>
                    <tr>
                        <td> <?= $lieu['intitule'] ?></td>
                        <td> <?= $lieu['nbrBeneficiaires'] ?></td>
                        <td> <?= $lieu['libelle'] ?></td>
                        <td> <?= $lieu['dateCreation'] ?></td>
                        <td> <?= $lieu['etat'].'/5'  ?>
                        </td>
                        <td><a class="btn btn-success "  href="<?= base_url('centre/ajoutBien'); ?>">الدخول</a></td>
                    </tr>

<?php endforeach ?>
            </tbody>

        </table>


    </div>



    
    
    <div class="tab-pane" id="gestionBien">
      <center>  <div class="page-header">
        <h1>تسير التجهيزات</h1>
        </div>
       </center>


<a class="btn btn-primary" data-toggle="modal" data-target="#ajouterBien" style="float:left; width: 200px; margin-left: 35px;" >إضافة</a>

        <table name="listeC" id="listeC" class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>الإسم</th>
                     <th>النوع</th>
                     <th>المصدر</th>
                    <th>تاريخ التسليم</th>
                    <th>الحالة</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
<?php foreach ($biens as $bien): ?>
                    <tr>
                        <td> <?= $bien['libelle'] ?></td>
                        <td> <?= $bien['type'] ?></td>
                        <td> <?= $bien['source'] ?></td>
                        <td> <?= $bien['dateAquisition'] ?></td>
                        <td> <?=$bien['etat'].'/5';?></td>
                        <td><a class="btn btn-success "  href="<?= base_url('centre/ajoutBien'); ?>">الدخول</a></td>
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













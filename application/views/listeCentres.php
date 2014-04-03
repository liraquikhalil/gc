

<script src=" <?= base_url('assets/js/jquery.dataTables.js') ?> "></script>
<script src=" <?= base_url('assets/media/js/TableTools.js') ?> "></script>
<script src=" <?= base_url('assets/media/js/ZeroClipboard.js') ?> "></script>


<link href=" <?= base_url('assets/css/dataTable.css') ?> " rel="stylesheet">
<link href=" <?= base_url('assets/media/css/TableTools.css') ?> " rel="stylesheet">


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
                        "mColumns": [4 ,3, 2, 1, 0]
                    },
                        {
                        "sExtends": "print",
                        "sButtonText": "print",
                        "mColumns": [0, 1, 2, 3, 4]
                    },
                    {
                        "sExtends": "pdf",
                        "sButtonText": "pdf",
                        "mColumns": [0, 1, 2, 3,4]
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
<a class="btn btn-primary" style="float:left; width: 200px; margin-left: 35px;" href="<?= base_url('centre/ajout'); ?>">إضافة</a>

<table name="listeC" id="listeC" class="table table-hover table-bordered table-striped table-condensed">
    <thead>
        <tr>
              <th>الرقم</th>
            <th>الإسم</th>
            <th>طاقة الإستعابية</th> 
            <th>جنس النزلاء</th>
            <th>تاريخ الإحداث</th>
            <th>رقم الهاتف</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($centres as $centre): ?>
            <tr>
                 <td> <?= $centre['numero'] ?></td>
                <td> <?= $centre['nom'] ?></td>
                <td> <?= $centre['capacitee'] ?></td>
                <td> <?= $centre['sexe'] ?></td>
                <td> <?= $centre['dateCreation'] ?></td>
                <td> <?= $centre['tel'] ?></td>
                <td>
                <a class="btn btn-success"  href=" <?= base_url('centre/accueilCentre/'.$centre['centreID']); ?> " >الدخول</a>
                <a class='btn btn-danger' href="<?= base_url('centre/delete/'.$centre['centreID']); ?>"> حدف</a>
                <a class='btn btn-warning' href="<?= base_url('centre/update/'.$centre['centreID']); ?>"> تغيير</a>
                </td>
            </tr>

        <?php endforeach ?>
    </tbody>

</table>

$(document).ready(function(){
    
    $('#example').dataTable({
        "aLengthMenu" : [[10, 25, 50, 100, -1], [10, 25, 50, 100, 'all']],
        "aaSorting"   : [[ 1, "asc" ]], "iDisplayLength": 10,
        "bProcessing" : true, 'bServerSide': true,
        "sAjaxSource" : "http://localhost/theme/gender/get_genders",
        "fnServerData": function (sSource, aoData, fnCallback) {
            aoData.push({
                "name": "<?= $this->security->get_csrf_token_name() ?>",
                "value": "<?= $this->security->get_csrf_hash() ?>"
            });
            $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
        },
        "aoColumns": [{"bSortable":false}, null, null, {"bSortable":false, "bSearchable": false}]
    });

    $('#example').on('click', '.image', function() {
        var a_href = $(this).attr('href');
        alert('edit');
        alert(a_href);
        $('#myModal').modal();
        return false;
    });

    $('#add').click(function(){
        $('#myModal').modal('show');
    });

    $('#save').on('click',function(){
        alert('Saving');
        $('#myModal').modal('hide');
    });
});
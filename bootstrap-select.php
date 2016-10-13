<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="http://localhost/sailor_mst/dist/scripts/jquery.min.js">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
</head>
<body>
  <select class="productCategory" multiple data-actions-box="true">
      <option>Laptop</option>
      <option>Tablet</option>
      <option>Computer</option>
  </select>
  <select class="selectpicker" data-live-search="true" name="partTwo[]" id="partTwo" data-placeholder="Select One"  multiple data-actions-box="true"  actionsBox ="false" data-size="5" >
      <option>Laptop-2</option>
      <option>Tablet-2</option>
      <option>Computer-2</option>
  </select>

  <script>
    $('.productCategory').selectpicker({
      style: 'btn-info',
      size: 4
    });
    $(".bs-select-all").on('click', function() {
        alert("ALL SELECTED");
        /*
        var trade = 1;
            $("#trade").on('change', function(event){
                if(trade == 1){
                    $.ajax({
                        url: '<?php echo base_url() ?>reportViewPrint/strengthByBranch/partTwoByTrade',
                        type: 'POST',
                        dataType: 'html',
                        data: {trade: $(this).val()},
                        beforeSend: function () {
                            $(".trade").html("<img src='<?php echo base_url(); ?>dist/img/loader-small.gif' />");
                        },
                        success: function (data) {
                             $(".trade").html('');
                            $('#partTwo').html(data);
                            $('#partTwo').selectpicker('refresh');
                        }
                    });                   
                }
                trade++;
         */
    });
    $(".bs-deselect-all").on('click', function() {
        alert("ALL DESELECTED");
    });
  </script> 
</body>
</html>
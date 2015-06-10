<?php require_once("headPage.php"); ?>
<body>
<script>
    var availableTags = [];
    var id_pro = [];
    var id_dis = [];
</script>
<?php

$arr = $district;
for($i=0;$i<count($arr);$i++){
    ?>
    <script>
        availableTags[<?php echo($i) ?>] = <?php echo( "'" . $arr[$i]->NAME . "'") ?>;
        id_pro[<?php echo($i) ?>] = <?php echo( "'" . $arr[$i]->pro_id . "'") ?>;
        id_dis[<?php echo($i) ?>] = <?php echo( "'" . $arr[$i]->dis_id . "'") ?>;
    </script>
<?php
}
?>
<div class="Page">
    <img style="position: relative; top: 10px; left: 10px" src="<?php echo base_url(); ?>assets/img/uber_slogo.png" width="3%"/>
<<<<<<< HEAD
    <a style="position: relative; top: 10px; left: 10px" href="<?php echo base_url(); ?>index.php/login" class="btn btn-danger">Log out</a>
=======
    <a style="position: relative; top: 10px; left: 10px" href="#" class="btn btn-danger">Log out</a>
>>>>>>> origin/master
    <a style="position: relative; top: 10px; left: 10px" href="<?php echo base_url(); ?>index.php/Home" class="btn btn-success">Return index</a>

    <div class="Header">

        <b id="titlePage">
            <p style="text-align:center">
                DRIVER LIST
            </p>
        </b>
    </div>
    <div class="Content_report">
        <div class="item active">
            <div class="ChooseRegion2">

                    <form class="form-inline" name="frmRegion" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" action="" id="frmRegion">
                        <div class="form-group">
                            <p style="color: white; font-weight: bold;">Choose a district:
                            <input  class="form-control" id="autocomplete" title="type &quot;a&quot;" placeholder="Search..." value="">
                            </p>
                            <div id="hidden"></div>
                        </div>
                    </form>


            </div>
        </div>
        <?php require_once('report_table.php') ?>
    </div>


</div>

<script>

    $( "#accordion" ).accordion();

    $( "#autocomplete" ).autocomplete({
        source: availableTags
    });

    $("input[id^='autocomplete']").autocomplete({
        select: function (event, ui) {
            var label = ui.item.label;
            var value = ui.item.value;
            var res = value.split(', ');
            for(i=0;i<availableTags.length;i++){
                if(availableTags[i] == value){
                    document.getElementById('hidden').innerHTML =
                        '<input id="pro" type="hidden" name="province" value="'+id_pro[i]+'">' +
                        '<input id="dis" type="hidden" name="district" value="'+id_dis[i]+'">';
                    break;
                }
            }
        }
    });

</script>
</body>

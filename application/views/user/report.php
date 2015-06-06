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
    <?php require_once("header.php"); ?>
    <div class="Content">
        <p style="text-align: center"><img src="<?php echo base_url(); ?>assets/img/step1.png" width="18%"></p>
        <div class="item active">
            <div class="ChooseRegion2">
                <div class="input-group">
                    <form class="form-inline" name="frmRegion" action="<?php echo base_url(); ?>index.php/Home/step2" method="POST" action="" id="frmRegion">
                        <div class="form-group">
                            <input class="form-control" id="autocomplete" title="type &quot;a&quot;" placeholder="Region..." value="">
                            <div id="hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("footer.php"); ?>
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

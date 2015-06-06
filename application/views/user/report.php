<!Doctype>
<html>
    <head>
        <title>Uber Login</title>
        <meta charset="utf-8">
        <?php
            require_once("import.php");
        ?>  
        
    </head>
    <body>
        <script>
            var availableTags = ['abc','adf','bfg'];
        </script>
        <?php
            // print_r($district1);
            // $arr = $district1;
            // for($i=0;$i<count($arr);$i++){
            ?>
                <script>
                    //availableTags[<?php echo($i) ?>] = <?php echo( "'" . $arr[$i]->NAME . "'") ?>;
                </script>
            <?php
            //}
        ?>
        <div class="Page">
            <fieldset>
			    <legend>Tạo Report Danh sách tài xế theo vùng:</legend>
			    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			    <input type="text" name="txtRegion" placeholder="Region..." value="<?php if(isset($_POST['txtRegion'])) echo($_POST['txtRegion']);?>" />
                <!-- <input id="autocomplete" title="type &quot;a&quot;" placeholder="Region...">-->
			    <input type="submit" name="btnReport" value="OK"/>
			    </form>
			</fieldset>
            <a href="<?php echo base_url('index.php/users/test'); ?>" class="btn btn-danger">Logout</a>
			<?php
				require_once("report_table.php");
			?>          
        </div>
        <script>

        $( "#accordion" ).accordion();

        $( "#autocomplete" ).autocomplete({
            source: availableTags
        });

        $("input[id^='autocomplete']").autocomplete(
        {
        select: function (event, ui) {
            var label = ui.item.label;
            var value = ui.item.value;
            
            alert(<?php echo "string"; ?>);
            alert('Value : ' + value );
                    }
            });

        </script>
    </body>
</html>
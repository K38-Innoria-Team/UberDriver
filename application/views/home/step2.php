
<?php require_once("headPage.php"); ?>
<body>
<div class="Page">
    <?php require_once("header.php"); ?>
    <div class="Content">
        <p style="text-align: center"><img src="<?php echo base_url(); ?>assets/img/step2.png" width="18%"></p>
        <div class="Services" style="text-align:center">
            <p style="color: white; font-weight: bold; float: left; text-align: center">Choose a service:</p>
            <span >

            <?php
                if(count($service)>0){
                    for($i=0;$i<count($service);$i++){
            ?>
            <form method="POST" action="<?php echo base_url(); ?>index.php/Home/step3">
                <span id="serviceItems1" class="service-left">
                    <h3><?php echo($service[$i]->name); ?></h3>
                    <p>
                        <img src="<?php echo base_url(); ?>assets/img/car1.png" width="60%"><br/>
                        <button type="submit" id="myButton1" class="btn btn-primary">
                            Choose this service
                        </button>
                        <?php
                            echo '<input type="hidden" name="ser_id" value="'.$service[$i]->id.'">';
                        ?>
                    </p>
                </span>
            <?php
                echo '<input type="hidden" name="dis_id" value="'.$dis_id.'">';
            ?>
            </form>
            <?php
                    }
                }
            ?>
            </span>

            <?php
            //print_r($service);
            ?>
        </div>

    </div>
    <?php require_once("footer.php"); ?>
</div>
</body>

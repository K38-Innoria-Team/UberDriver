<div class="Content">
	<?php
		if(!isset($_POST["btnSubmit"])){
	?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<script>
				var flag = 1;
				function hideNext(){
					flag++;
					if(flag == 3){
						document.getElementById('next').style.display = "none";
					}
					if(flag > 1){
						document.getElementById('prev').style.display = "block";
					}
				}
				function hidePrev(){
					flag--;
					if(flag == 1){
						document.getElementById('prev').style.display = "none";
					}
					if(flag < 3){
						document.getElementById('next').style.display = "block";
					}
					//document.getElementById('next').style.display = "block";
				}
			</script>
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>				    
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">				      
					<?php
						require_once("regions.php");
					?>				      
				</div>
				<div class="item">
					<?php
						require_once("services.php");
					?>
				</div>
				<div class="item">
					<?php
						require_once("information.php");
					?>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" onclick="hidePrev()" id="prev" style="display:none" href="#carousel-example-generic" role="button" data-slide="prev">
				<span>Previous</span>
			</a>
			<a class="right carousel-control" onclick="hideNext()" id="next" href="#carousel-example-generic" role="button" data-slide="next">
				<span>Next</span>
			</a>
		</div>
				
	<?php
		}
		else{
	?>
	<?php
		require_once("welcome.php");
	?>
	</div>
	<?php
		}
	?>
</div>
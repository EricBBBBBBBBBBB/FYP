	<!-- push-menu -->
	<nav id="push-menu" class="push-menu">
		<div class="push-level">
			<h2><i class="fa fa-globe"></i>&nbsp; All Categories</h2>
			<ul>
			<?php
			
			/*require_once("connMysql.php");
			mysql_select_db('lc_database');
			$sql = "SELECT * FROM `category` ";
			$record = mysql_query($sql);
			
			while($category=mysql_fetch_assoc($record)){
				echo'
				<li class="fa fa-arrow-left" >
					<a>'.$category['Category'].'</a>
					<div class="push-level">
						<h2>'.$category['Category'].'</h2>
						<a class="push-back" href="#">back</a>
						<ul>';
					
				echo'
						</ul>
					</div>
				</li>
				';
			}*/
			require_once("connMysql.php");
			mysql_select_db('lc_database');


			$sql = "SELECT * FROM `category` WHERE Parent_ID = 0";
			$record = mysql_query($sql);

			while($category = mysql_fetch_assoc($record)){
				$sql = "SELECT * FROM `category` WHERE Parent_ID = ".$category['CategoryID']."";
				$record2 = mysql_query($sql);

				echo'
				<li class="fa fa-arrow-left" >
					<a>'.$category['Category'].'</a>
					<div class="push-level">
						<h2>'.$category['Category'].'</h2>
						<a class="push-back" href="#">back</a>
						<ul>';
				
				while($category2 = mysql_fetch_assoc($record2)){
					echo'
							<li><a>'.$category2[Category].'</a></li>';
				}

					
				echo'
						</ul>
					</div>
				</li>
				';
			}
			?>
			</ul>
		</div>
	</nav>
<!-- /push-menu -->

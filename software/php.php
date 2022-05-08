<?php

function Elements($gameName,$Gameprice,$Rank,$page,$action ,$productimg)
{
    @$dp = new mysqli('localhost', 'root', '', 'advance');
    $qry="SELECT Platform,Year,Genre,Publisher FROM games where Rank='$Rank'";
    $res2=$dp->query($qry);
    $row2= $res2->fetch_array();
    $Platform=$row2['Platform'];
    $Year=$row2['Year'];
    $Genre=$row2['Genre'];
    $Publisher=$row2['Publisher'];

    $Element="
        <form action=$action method=\"post\" >
        <div class=\"product_wrap\">
						<div class=\"product_info\">
							<div class=\"product_img\">
								<img src=\"$productimg\" alt=\"ProductImage\" width=\"200px\" height=\"200px\">
							</div>
							<div class=\"product_data\">
								<div class=\"description\">
									<div class=\"main_header\">
									  Game Name:	$gameName
!									<input type='hidden' name='Rank' value='$Rank'>
									</div>
									<div class=\"sub_header\">
									  Platform: $Platform <br>
									  Year : $Year <br>
									  Genre : $Genre <br>
									  Publisher : $Publisher <br>								  
										
									</div>
								</div>
								<div class=\"price\">
									<div class=\"current_price\">Price:  $$Gameprice</div>
								</div>
							</div>
						</div>
						<div class=\"product_btns\">
							<button type=\"submit\" name=\"remove\"  class=\"remove\">REMOVE</button>
							<button type=\"submit\"  name=\"move\" class=\"whishlist\">MOVE TO $page</button>
						</div>
					</div>
		</form>						
    ";
    echo $Element;
}
?>

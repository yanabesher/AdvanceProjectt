<?php

function Elements($gameName,$GameInformation,$Gameprice,$Rank,$page)
{


    $Element="
        <form action=\"wishlist%20page.php\" method=\"post\" >
        <div class=\"product_wrap\">
						<div class=\"product_info\">
							<div class=\"product_img\">
								<img src=\"images/img.png\" alt=\"ProductImage\" width=\"200px\" height=\"200px\">
							</div>
							<div class=\"product_data\">
								<div class=\"description\">
									<div class=\"main_header\">
									  Game Name:	$gameName
!									<input type='hidden' name='Rank' value='$Rank'>
									</div>
									<div class=\"sub_header\">
										$GameInformation
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

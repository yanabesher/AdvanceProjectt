<?php
session_start();

function component($productname, $productprice, $productimg, $productid ,$Platformyy,$Rank){
    $_SESSION['CartProdName']=$productname;
    $_SESSION['CartProdPrice']=$productprice;
    $_SESSION['Rank']=$Rank;

    $element = "
    
    <div class=\" my-3 my-md-0\">
                <form action=\"Games.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                        
                       
                            <img src=\"$productimg\" alt=\"Image\" class=\"img-fluid card-img-top\">
                            
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <input type='hidden' name='Rank' value='$Rank'>
                            <input type='hidden' name='CartProdPrice' value='$productprice'>
                            <input type='hidden' name='CartProdName' value='$productname'>
                            <h6>
                            
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
The Platform is $Platformyy                            </p>
                            <h5>
                                <span class=\"price\">$$productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"addToWish\">Add to wishlist </button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"$productimg\" alt=\"Image\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\"> </small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
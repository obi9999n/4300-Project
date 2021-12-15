<?php
 
function component($productName, $productPrice, $productImg){
   $element = "
   <div class="featured-item" id="featureditem1">
       <div>
           <div class="item-info">
               <div>
                   <p class="item-text">$productName</p>
               </div>
               <div>
                   <p class="item-text"><s>$$productPrice</s></p>
               </div>
           </div>       
       </div>
       <div>
           <img src="$productImg" alt="red rhude T-shirt"
               width="275px"
               height="210px"
           >
       </div>
       <div class="button-area">
           <button class="featured-out-of-stock">VIEW</button>
       </div>
   </div>
   ";
   echo $element
}
 
?>

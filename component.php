<?php

function component(){
    $element = "
    <div class="featured-item" id="featureditem1">
        <div>
            <div class="item-info">
                <div>
                    <p class="item-text">PLACEHOLDER</p>
                </div>
                <div>
                    <p class="item-text"><s>$000</s></p>
                </div>
            </div>        
        </div>
        <div>
            <img src="images/placeholder.png" alt="red rhude T-shirt"
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
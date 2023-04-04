<?php
    $s = '<div class="next-page">';
    for ($i = 1; $i <= $totalPages; $i++) { 
        if ($i != $current_page) {
            $s .= '<div class="page">
                    <a href="?per_page='.$item_per_page.'&page='.$i.'">'.$i.'</a>
                </div>';
        } else {
            $s .= '<div class="page" style="background-color: #cb1c22;">
                <a href="?per_page='.$item_per_page.'&page='.$i.'" style=" color: white;">'.$i.'</a>
               </div>';
        }
    }
    $s .= "</div>";
    echo $s;
?>
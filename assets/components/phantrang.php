<!-- <div class="next-page">
    <div class="icon-page1">
        <a href="" title="Quay về đầu trang"><i class="ti-arrow-circle-left"></i></a>
    </div>
    <div class="page1" style="background-color: #cb1c22;">
        <a href="?per_page=4&page=1" style=" color: white;">1</a>
    </div>
    <div class="page2">
        <a href="?per_page=4&page=2">2</a>
    </div>
    <div class="icon-page2">
        <a href="trangchu2.html" title="Qua trang kế"><i class="ti-arrow-circle-right"></i></a>
    </div>
</div> -->

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
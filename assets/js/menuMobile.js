$(document).ready(function() {
    const $menu = $("#menu")
    const $menu_drawer = $("#menu-drawer")
    const $menu_overlay = $("#menu-overlay")

    $menu.click(function() {
        $menu_overlay.css({ opacity: 1, visibility: "visible"});
        $menu_drawer.css({transform: "translateX(0)"})
      });
    
      $menu_overlay.click(function() {
        $menu_overlay.css({ opacity: 0, visibility: "hidden", transform: "translateX(-100%)" });
        $menu_drawer.css({transform: "translateX(-100%)"})
      });
})
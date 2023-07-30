$(document).ready(function() {
    const $input = $('#input');
    const $btnSearch = $('#btnSearch');
  
    $btnSearch.click(function(e) {
      if (!$input.val()) {
        alert("Bạn phải nhập thông tin tìm kiếm");
        e.preventDefault();
      }
    });
  }
);
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('preview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
  
function previewImageDetail(event) {
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById('preview-detail');
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
};
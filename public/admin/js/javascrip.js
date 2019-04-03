


   window.onclick = function(event) {
    var modal = document.getElementById('modal-createsize');
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    function create(){
     $(document).click(function(){
        $('#modal-createsize').css('display','block');
     });
    }  

    function exit(){
      $(document).click(function(){
        $('#modal-createsize').css('display','none');
     });
    }
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
         if(next<5){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
       
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="qus' + next + '" type="text" placeholder="Question '+next+'" required="true">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
                next = next-1;
            });
        }
        else
            alert("You can add Max 5 Questions !!")
    });
    

    
});
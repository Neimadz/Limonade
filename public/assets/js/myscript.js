var newList = '<form><label>Titre de ce liste</label><input type="text" name="newList" placeholder="Nom de votre nouveau list"></form>';

$(function() {
    $('#add-list-btn').click(function(){
        $('#add-list-btn').addClass('hidden');
        $('#add-list-form').removeClass('hidden');
    });

});

$(document).mouseup(function (e) {
    var listDiv = $("#add-new-list");
    var listForm = $.trim($('#add-list-form').val());

    console.log(listForm.length);

    if (!listDiv.is(e.target) && listDiv.has(e.target).length === 0) { // if the target of the click isn't the container ... nor a descendant of the container
        if(listForm.length == 0) {
            $('#add-list-btn').removeClass('hidden');
            $('#add-list-form').addClass('hidden');
        }
    }
});

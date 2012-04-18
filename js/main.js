$(function () {


    });

function build_tree(tree_id, persist, disabled, selection, separator, number_of_spheres) {
    $('#'+tree_id).treeview({
        collapsed: true, 
        persist: persist
    });
    if (number_of_spheres == undefined) {
        $('#'+tree_id+' input:checkbox').click(function(event){
            var target=$(event.target);
            target.parent().parent().find(':checkbox').each(function(){
                $(this).attr('checked', target.is(':checked'));
            });
        });
    }
    else {
        var count;
        $('#'+tree_id+' input:checkbox').click(function(){
            count = 0;
            $('#'+tree_id+' input:checkbox:checked').each(function(){
                count++;
            });
            if (count >= number_of_spheres) {
                $('#'+tree_id+' input:checkbox:not(:checked)').each(function(){
                    $(this).attr('disabled', 'disabled');
                });
            }
            else {
                $('#'+tree_id+' input:checkbox:disabled').each(function(){
                    $(this).removeAttr('disabled');
                });
            }
        });
    }
    $('#'+tree_id+" li:not(:has('ul'))").attr('style', 'margin-left: 9px;');    
    if (disabled) {
        $('#'+tree_id+' input:checkbox').each(function(){
            $(this).attr('disabled', 'disabled');
        });
    }
    if (selection && separator) {
        set_selection(tree_id, selection, separator);
    }
}
function set_selection(tree_id, selection, separator) {
    $('#'+tree_id+' input:checkbox').each(function(){
        if (selection.indexOf((separator + $(this).attr('id') + separator)) != -1)
        {
            $(this).attr('checked', 'checked');
        }
    });
}
function get_selection(tree_id, separator) {
    var selection = separator;
    $('#'+tree_id+' input:checkbox:checked').each(function() {
        selection += $(this).attr('id') + separator;
    });
    return selection;
}

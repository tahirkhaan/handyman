$(document).ready(function()
{
    $("#cat").change(function(){
        var cat_id = $(this).val();

        $.ajax({
            url: 'sql_getSubCatsforCats.php',
            type: 'post',
            data: {category_id: cat_id},
            dataType: 'json',
            success:function(response)
            {
                var len = response.length;
                $("#sub_cat").empty();
                for( var i = 0; i<len; i++){
                    var sub_category_id = response[i]['sub_category_id'];
                    var sub_category_name = response[i]['sub_category_name'];
                    $("#sub_cat").append("<option value='"+sub_category_id+"'>"+sub_category_name+"</option>");
                }
            }
        });
    });
});
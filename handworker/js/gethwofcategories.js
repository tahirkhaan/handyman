$(document).ready(function()
{
    $("#sub_cat").change(function(){
        var cat_id = $(this).val();
        //alert(cat_id);
        console.log(cat_id);

        $.ajax({
            url: 'sql_getHwOfCategries.php',
            type: 'post',
            data: {category_id: cat_id},
            dataType: 'json',
            success:function(response)
            {
                console.log(response);
                var len = response.length;
                $("#handworker_id").empty();
                for( var i = 0; i<len; i++){
                    var user_id = response[i]['user_id'];
                    var user_name = response[i]['user_name'];
                    $("#handworker_id").append("<option value='"+user_id+"'>"+user_name+"</option>");
                }
            }
        });
    });
});
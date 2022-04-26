
function show_modal(id, type)
{
    if (type == 'insert'){
        $('#form')[0].reset();
        $('#modal_title').html('Tambah Data');
    } else {
        $('#modal_title').html('Rubah Data');
        get_detail(id);
    }
    $('#MyModal').modal('show');
}

function get_detail(id)
{
    $.ajax({
        url : window.location.href+"/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $.each(data,function(key,value){
                var keys_id = "#"+key;
                $(keys_id).val(value);
            });
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Gagal Mendapatkan Data');
        }
    });
}

function save_data(type)
{
    
}
$('#trackings-dt').DataTable({
    ajax: $("input[name^='url_root']").val() + '/trackings-datatables',
    beforeSend: function (request) {
        request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
    },
    columns: [
        { data: "description", class: "cell", render: function (data) {
            return data ? data : "";
        }},
        { data: "url", class: "cell", render: function (data) {
            return data ? data : "";
        }},
        {data: "id", class: "text-center cell", orderable: false, render: function (data) {
            return '<div style="justify-content: center; display: flex !important;"><a href="' + $("input[name^='url_trackings']").val() + '/' + data + '/edit" class="btn btn-primary">Editar</a>&nbsp;<a href="javascript: void(0);" onclick="delete_tracking(' + data + ');" class="btn btn-danger btn-icon">Excluir</a></div>';
        }}
    ]
});

function delete_tracking(id) {
    $.ajax({
        method: 'DELETE',
        url: $("input[name^='url_trackings']").val() + '/' + id,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    }).done(function(data, statusText, xhr) {
        let status = xhr.status;
        if(status == 200) {
            $('#trackings-dt').DataTable().ajax.reload();
        }
    }).fail(function(error) {
        console.log('Ops...');
    });
}

$('#trackings-live').DataTable({
    searching: false,
    paging: false,
    info: false,
    ajax: $("input[name^='url_root']").val() + '/trackings-datatables',
    beforeSend: function (request) {
        request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
    },
    columns: [
        { data: {description: "description", url: "url", last_query: "last_query"}, class: "cell", render: function (data) {
            let text = `${data.description}<br>${data.url}<br>Última atualização: ${data.last_query}`;
            return text;
        }},
        { data: "code", class: "cell text-center", render: function (data) {
            let img = "";
            if (data == 200) {
                img = '<img src="' + $("input[name^='green_light']").val() +  '" width="40">';
            } else {
                img = '<img src="' + $("input[name^='red_light']").val() +  '" width="40">';
            }
            return img + '<br>Code: ' + data;
        }},
    ],
    drawCallback: function(settings) {
        $("#trackings-live thead").remove(); 
    }  
});
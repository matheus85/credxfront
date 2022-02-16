$(document).ready(function(){
    setInterval(function(){
        $('#trackings-live').DataTable().ajax.reload();
    }, 60000);
});

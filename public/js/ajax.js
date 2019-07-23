
$(document).ready(function(){
    $("#crips").keyup(function(){
        $('#alert_placeholder').html('<i class="fa fa-spinner fa-spin" style=" font-size: 40px;margin:20px;"></i>')
        // alert("Value: " + $("#crips").val());
        $.get("http://localhost/spk_pgri/public/ajax/" + $("#crips").val() + "/" + $("#kode").val() + "/" + $("#id").val(), function (data, status) {
        //    alert(data);
            data = JSON.parse(data); 
            
            if (data.status=="false"){
                $("#crips").val("");
                $('#alert_placeholder').html('<div class="alert alert-danger alert-dismissable fade in"><a href="#" class= "close" data-dismiss="alert" aria-label="close">&times;</a><strong>Peringatan! <br></strong>' + data.data + '</div>')
            }else{
                $("#id_crips").val(data.data); 
                $('#alert_placeholder').html('<div class="alert alert-info alert-dismissable fade in"><a href="#" class= "close" data-dismiss="alert" aria-label="close">&times;</a><strong>Pesan! <br></strong>' + data.msg + '</div>')            
            }
        });
    });

    $('.validate-form').submit(function (e) {
        // e.preventDefault();
        if (!$("#id_crips").val()){
            var data ="Nilai Harus Diisi !";
            $('#alert_placeholder').html('<div class="alert alert-danger alert-dismissable fade in"><a href="#" class= "close" data-dismiss="alert" aria-label="close">&times;</a><strong>Peringatan! <br></strong>' + data + '</div>')
            return false;
        }


    });

    $("#print").click(function () {
        var printContents = document.getElementById('printarea').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    });
});

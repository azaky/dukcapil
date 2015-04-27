/**
 * Created by ramandika on 4/19/2015.
 */


$("document").ready(function(){
    $('[name="detail"]').click(function(e){
        e.preventDefault();
        var nikpria=$('[name="nik-pria"]').val();
        var nikwanita=$('[name="nik-wanita"]').val();
        var tanggal_pernikahan=$('[name="tanggal"]').val();
        var tempat_pernikahan=$('[name="tempat"]').val();
        if(nikpria.length>0 && nikwanita.length>0) {
            $.ajax({
                type: "POST",
                url: 'http://localhost/dukcapil/public/aktanikah/searchnik',
                data: {nik_pria: nikpria, nik_wanita: nikwanita},
                success: function (response) {
                    var error='';
                    if(response['pria']===null){
                        error+='NIK pria tidak ditemukan\n';
                        $('[name="nama_lengkap_pria"]').val('');
                        $('[name="tempat_lahir_pria"]').val('');
                        $('[name="tanggal_lahir_pria"]').val('');
                    }
                    else{
                        $('[name="nama_lengkap_pria"]').val(response['pria'].nama);
                        $('[name="tempat_lahir_pria"]').val(response['pria'].tempatLahir);
                        $('[name="tanggal_lahir_pria"]').val(response['pria'].waktuLahir);
                    }
                    if(response['wanita']===null){
                        error+='NIK wanita tidak ditemukan';
                        $('[name="nama_lengkap_wanita"]').val('');
                        $('[name="tempat_lahir_wanita"]').val('');
                        $('[name="tanggal_lahir_wanita"]').val('');
                    }
                    else{
                        $('[name="nama_lengkap_wanita"]').val(response['wanita'].nama);
                        $('[name="tempat_lahir_wanita"]').val(response['wanita'].tempatLahir);
                        $('[name="tanggal_lahir_wanita"]').val(response['wanita'].waktuLahir);
                    }
                    if(error.length>0){
                        alert(error);
                    }
                    else  $('#submit_button').attr('disabled',false);
                },
                error: function () {
                    alert("Internal Server Error");
                }
            }, "html");
        }else{
            alert('NIK ada yang kosong');
        }

    });
});
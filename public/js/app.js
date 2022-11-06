// Alamat : 
$.ajax({
    type: "get", //method
    url: "/alamatAPI", //url ke controller
    dataType: "json",
    success: function (response) { //response membawa $wilayah dari siswa controller (wilayah) 
        // looping buat namoilin
        response.map((value) => {
            $('#provinces').append($('<option>',{
                value : value.id,
                text : value.name,
            }));
        });
    }
});

// Menggunakan 1 fungsi
function daerah(jenis, id, text){
    let dr;

    if(jenis == 'provinces'){
        dr = 'regencies'
    }else if(jenis == 'regencies'){
        dr = 'districts'
    }else if(jenis == 'districts'){
        dr = 'villages'
    }

    $.ajax({
        type: "get",
        url: `https://www.emsifa.com/api-wilayah-indonesia/api/${dr}/${id}.json`, //menggunakan titik satu agar value php bisa dibaca
        dataType: "json",
        success: function (response) {
            console.log(response);
            $(`#${dr}`).children().remove()
            response.map((value) => {
                $(`#${dr}`).append($('<option>',{
                    value : value.id,
                    text : value.name
                }));
            });
        }
    });
}
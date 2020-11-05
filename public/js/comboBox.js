let dataKota;
$.get('../kota.json', async function(data) {
    console.log('test0');
    dataKota = await data;
}, 'json')


function comboboxkota(){
    let indexSelected = $('#ddlProvinsi').val();
    console.log('test');
    let listDataKota = dataKota[indexSelected]
    $('#ddlKota').find('option').remove().end().append('<option value="0">- Pilih Kota -</option>')
    $.each(listDataKota, (key, kota) => {
        console.log('test3');
        $.each(kota, (id, val) => {
            $('#ddlKota').append(`<option value="${val}">${val}</option>`)
        })
    })
}

function comboboxkota2(){
    let indexSelected = $('#ddlProvinsi2').val();
    console.log('test');
    let listDataKota = dataKota[indexSelected]
    $('#ddlKota2').find('option').remove().end().append('<option value="0">- Pilih Kota -</option>')
    $.each(listDataKota, (key, kota) => {
        console.log('test3');
        $.each(kota, (id, val) => {
            $('#ddlKota2').append(`<option value="${val}">${val}</option>`)
        })
    })
}
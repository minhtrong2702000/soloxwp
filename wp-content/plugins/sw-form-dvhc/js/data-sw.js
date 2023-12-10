const urldt = "https://provinces.open-api.vn/api/";
function swCallApi(url) {
    return axios.get(url)
        .then( (res) => {
            swrenderData(res.data,"city");
        } )
}
swCallApi(urldt);

function getDistrict(url2) {
    return axios.get(url2)
        .then( (res) => {
            swrenderData(res.data.districts,"district");
        })
}

function getWard(url2) {
    return axios.get(url2)
        .then( (res) => {
            swrenderData(res.data.wards,"ward");
        })
}

function swrenderData(arr,select) {
    let option = '<option disable value="">Chọn</option> ';
    arr.forEach(element => {
        option +=  `<option data-id="${element.code}" value="${element.name}">${element.name} </option>`
    });
    document.querySelector("#" + select).innerHTML = option;
} 

jQuery(document).ready(function($){
    $("#city").change( () => {
        getDistrict(urldt + "p/" + $("#city").find(':selected').data('id') + "?depth=2" );
        //alert("change select");
    })
    $("#district").change( () => {
        getWard(urldt + "d/" + $("#district").find(':selected').data('id') + "?depth=2" );
        //alert("change select");
    })

    $('#city').select2();
    $('#district').select2();
    $('#ward').select2();
});
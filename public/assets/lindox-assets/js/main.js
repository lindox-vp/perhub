function previewImg() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.imgpreview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

}

$(function() {
    var tanpa_rupiah = document.getElementById('is-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
 });


 function formatRupiah(angka, prefix)
 {
     var number_string = angka.replace(/[^,\d]/g, '').toString(),
         split    = number_string.split(','),
         sisa     = split[0].length % 3,
         rupiah     = split[0].substr(0, sisa),
         ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
         
     if (ribuan) {
         separator = sisa ? '.' : '';
         rupiah += separator + ribuan.join('.');
     }
     
     rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
     return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
 }
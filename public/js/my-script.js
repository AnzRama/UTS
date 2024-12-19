let listMahasiswa = document.getElementsByTagName("ol");
listMahasiswa[0].addEventListener("click", tampilkan);

function tampilkan(event){
    alert("Cek data Mahasiswa" +event.target.innerHTML);
}
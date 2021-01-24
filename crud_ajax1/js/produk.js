loadData();

<!--INSERT DATA-->
function simpan() {
  var nama = $("[name='nama']").val();
  var descrip = $("[name='descrip']").val();
  var harga = $("[name='harga']").val();
  //console.log(nama+" "+descrip+" "+harga);

  $.ajax({
    type : "POST",
    data : "nama="+nama+"&descrip="+descrip+"&harga="+harga,
    url  : "include/produk/insertData.php",
    success : function(result) {
      var resultObj = JSON.parse(result);
      $("#errormassage").html(resultObj.pesan);
      loadData();
    }
  });
}

<!--AMBIL DATA-->
function loadData() {
  var dataHandler = $("#load");
  dataHandler.html("");
  $.ajax({
    type : "GET",
    data : "",
    url  : "include/produk/getData.php",
    success : function(result) {
      var resultObj = JSON.parse(result);

      $.each(resultObj,function(key,val){

        var newRow = $("<tr>");
        newRow.html("<td>"+val.id_produk+"</td><td>"+val.nama+"</td><td>"+val.descrip+"</td><td>"+val.harga+"</td><td><button class='edit' id='"+val.id_produk+"'>Edit Data</button></td><td><button onclick='hapus()'>Hapus Data</button><td/>")
          dataHandler.append(newRow);
      });
    }
  });
}

<!--UPDATE DATA -->
$(document).on("click",".edit",function(){
  //console.log("edit data");
  var id = $(this).attr("id");
  //console.log(id_produk);
  $.ajax({
    type : "POST",
    data : "id="+id,
    url  : "include/produk/upgetData.php",
    success : function(result) {
      var resultObj = JSON.parse(result);
      //console.log(resultObj);
      $("[name='id']").val(resultObj.id_produk);
      $("[name='nama']").val(resultObj.nama);
      $("[name='descrip']").val(resultObj.descrip);
      $("[name='harga']").val(resultObj.harga);
    }
  });
});

function update() {
  var id = $("[name='id']").val();
  var nama = $("[name='nama']").val();
  var descrip = $("[name='descrip']").val();
  var harga = $("[name='harga']").val();

  $.ajax({
    type : "POST",
    data : "id="+id+"&nama="+nama+"&descrip="+descrip+"&harga="+harga,
    url  : "include/produk/updateData.php",
    success : function(result) {
      var resultObj = JSON.parse(result);
      $("#errormassage").html(resultObj.pesan);
      loadData();
    }
  });
}

<!--DELETE DATA -->
function hapus() {
  var id = $("[name='id']").val();

  $.ajax({
    type : "POST",
    data : "id="+id,
    url  : "include/produk/hapus.php",
    success : function(result){
      loadData();
    }
  });
}

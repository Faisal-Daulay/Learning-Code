<h2>Insert Data With AJAX / Update Data With AJAX</h2>
<table>
  <thead>
    <tr>
      <td>Id Produk</td>
      <td>
        <input type="text" name="id" disabled="disabled">
      </td>
    </tr>
    <tr>
      <td>Nama Produk</td>
      <td>
        <input type="text" name="nama">
      </td>
    </tr>
    <tr>
      <td>Description Produk</td>
      <td>
        <input type="text" name="descrip">
      </td>
    </tr>
    <tr>
      <td>Harga Produk</td>
      <td>
        <input type="text" name="harga">
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button onclick="simpan()" id="save">Save Data</button>
        <button onclick="update()" id="update">Update Data</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td id="errormassage"></td>
    </tr>
  </thead>
</table>
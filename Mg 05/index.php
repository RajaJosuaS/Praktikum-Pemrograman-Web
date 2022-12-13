<form id="form_mahasiswa" method="POST">
    <label for="prodi">Prodi</label>
    <select name="prodi"id="prodi">
    <option value="">--Pilih Prodi--</option>
    <option value="IF"> IF </option>
    <option value="EL"> EL </option>
    <option value="MS"> MS </option>
    <option value="TG"> TG </option>
    <option value="GL"> GL </option>
    </select>
</form>
<br>
<div id="tampil_data"></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
    $(document).ready(function () {
        $("#tampil_data").load("tampil.php");
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
                type : "POST",
                url : "tampil.php",
                data : data,
                success : function (response) {
                    $("#tampil_data").load("tampil.php");
                }
            });
         });
</script>
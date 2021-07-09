<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5/dist/css/bootstrap.css">
        <link rel="shortcut icon" href="img/key.png" type="image/x-icon">
        <link rel="stylesheet" href="css/custom.css">
        <script type="text/javascript" src="jquery.js"></script>
        <title>Kriptografi Sederhana</title>
    </head>
    <body>
        <section class="container">
            <div class="row">
                <div class="col-4 border border-4 border-dark rounded p-3 mt-5">
                <h1 class="text-center fw-bold">ENKRIPSI TOOLS</h1>
                    <form id="formulir">
                        <div class="mb-3">
                            <label for="palin" class="form-label">Plain Text</label>
                            <input type="text" class="form-control" id="plain" name="plain">
                        </div>
                        <div class="mb-3">
                            <label for="key" class="form-label">Kunci</label>
                            <select name="key" id="key">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="text-center d-block">
                            <button id="btnEnkrip" type="submit" name="enkrip" class="btn btn-danger px-4">Encryp</button>
                        </div>
                        <div class="mb-3 mt-2">    
                            <textarea name="output" id="outpute" cols="31" rows="5"></textarea>
                        </div>
                    </form>
                    <div class="text-center">&copy; <?php echo date('Y'); ?> Fega Suseno </div>
                </div>
                
                <div class="col-4"></div>


                <div class="col-4 border border-4 border-dark rounded p-3 mt-5">
                    <h1 class="text-center fw-bold">DESKRIPSI TOOLS</h1>
                    <form action="deskripsi.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="code">Masukan Code</label>
                            <input class="form-control" type="text" name="code" id="code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sub">Kunci Subtitusi</label>
                            <select name="sub" id="sub">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="text-center d-block">
                            <button id="btnDekrip" type="submit" name="dekrip" class="btn btn-success px-4">Decryp</button>
                        </div>
                        <div class="mb-3 mt-2">
                            <textarea name="hasil" id="hasil" cols="31" rows="5"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script>
            $(document).ready(function () {
                $("#btnEnkrip").click(function (e) { 
                    let formData = {
                        plain : $('#plain').val(),
                        key : $('#key').val(),
                    };
                    // ambil data manual dari id form
                $.ajax({ // Lakukan Ajax Request
                    type: "POST", // Method
                    url: "enkripsi.php", //Action
                    data: formData, //Ambil data dari skrip di atas
                    beforeSend: function(){ //Sebelum data di kirim, bisa kasih loading juga
                        $('#btnEnkrip').attr("disabled", true)
                    },
                    complete: function (){ //Ketika data sudah di terima
                        $('#btnEnkrip').attr("disabled", false)
                    },
                    success: function (respone) { 
                        $('#outpute').val(respone) //Masukan responnya untuk di tampilkan
                    }
                });

                e.preventDefault();
                });
            });


            $(document).ready(function () {
                $("#btnDekrip").click(function (e) { 
                    let formData = {
                        code : $('#code').val(),
                        sub : $('#sub').val(),
                    };
                    // ambil data manual dari id form
                $.ajax({ // Lakukan Ajax Request
                    type: "POST", // Method
                    url: "deskripsi.php", //Action
                    data: formData, //Ambil data dari skrip di atas
                    beforeSend: function(){ //Sebelum data di kirim, bisa kasih loading juga
                        $('#btnDekrip').attr("disabled", true)
                    },
                    complete: function (){ //Ketika data sudah di terima
                        $('#btnDekrip').attr("disabled", false)
                    },
                    success: function (respone) { 
                        $('#hasil').val(respone) //Masukan responnya untuk di tampilkan
                    }
                });

                e.preventDefault();
                });
            });
        </script>
    </body>
</html>
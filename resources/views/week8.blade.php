<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FORM DAN TABLE</title>
</head>
<body sytle="margin-right: 30px; margin-left: 20px; width:50px">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form>
    <br>
    <br>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <input id="text" name="text" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
            <div class="col-8">
                <input id="text2" name="text2" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
            <div class="col-8">
                <input id="text1" name="text1" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Jenis Kelamin</label> 
            <div class="col-8">
                <input id="text3" name="text3" type="text" class="form-control">
            </div>
        </div> 
    </form>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Jenis Tes</th>
                <th>Hasil Pemeriksaan</th>
                <th>Normal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tekanan Darah</td>
                <td></td>
                <td>120/80 mmhg</td>
            </tr>
            <tr>
                <td>Asam Urat</td>
                <td></td>
                <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
            </tr>
            <tr>
                <td>Kolesterol Total</td>
                <td></td>
                <td>< 200 mg/dl</td>
            </tr>
            <tr>
                <td>Gula Darah</td>
                <td></td>
                    <td>
                        Puasa: 70-110 mg/dl
                        <br>
                        2 jam setelah makan: 100-150 mg/dl
                        <br>
                        120/80 mmhg
                    </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
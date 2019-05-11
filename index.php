<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Programmer Dan Sekil Nya...</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card mb-3 shadow">
            <div class="card-header text-white bg-dark">
                <form action="proses.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tambah Data Programmer Baru" name="user"
                            autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="tambah_user" id="button-addon2">Tambah
                                Data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "arcademy");
                    $query = mysqli_query($link, "SELECT * FROM users");
                    while ( $data = mysqli_fetch_assoc($query) ) {
                    $user_id = $data['id'];
                    ?>
                <table class="table table-bordered">
                    <tr>
                        <td width="30%">
                            <?= $data['nama'] ?>
                        </td>
                        <td rowspan="2">
                            <form action="proses.php" method="post">
                            <div class="input-group">
                            <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <input type="text" name="skil" class="form-control" placeholder="Tambah Skil" autocomplete="off">
                                <div class="input-group-append">
                                    <button name="tambah_skil" class="btn btn-outline-secondary" type="submit"
                                        id="button-addon2">Tambah</button>
                                </div>
                            </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $querySkil = mysqli_query($link, "SELECT * FROM skils WHERE user_id='$user_id'");
                            while ( $skl = mysqli_fetch_assoc($querySkil) ) {
                            ?>
                                <?= $skl['nama_skil'] ?>,
                            <?php } ?>
                        </td>
                    </tr>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

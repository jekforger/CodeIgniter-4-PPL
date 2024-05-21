<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">User Form</h1>

        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form action="/validation/submit" method="post">
            <div class="form-group">
                <label for="nip">NIP<span class="text-danger">*</span>:</label>
                <input type="text" id="nip" name="nip" class="form-control" value="<?= old('nip') ?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama<span class="text-danger">*</span>:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?= old('nama') ?>">
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir<span class="text-danger">*</span>:</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= old('tgl_lahir') ?>">
            </div>

            <div class="form-group">
                <label>Gender<span class="text-danger">*</span>:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="laki-laki" <?= old('gender') === 'laki-laki' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan" <?= old('gender') === 'perempuan' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="pendidikan">Pendidikan<span class="text-danger">*</span>:</label>
                <select id="pendidikan" name="pendidikan" class="form-control">
                    <option value="">Pilih Pendidikan</option>
                    <option value="sd" <?= old('pendidikan') === 'sd' ? 'selected' : '' ?>>SD</option>
                    <option value="smp" <?= old('pendidikan') === 'smp' ? 'selected' : '' ?>>SMP</option>
                    <option value="sma" <?= old('pendidikan') === 'sma' ? 'selected' : '' ?>>SMA</option>
                    <option value="d3" <?= old('pendidikan') === 'd3' ? 'selected' : '' ?>>D3</option>
                    <option value="d4" <?= old('pendidikan') === 'd4' ? 'selected' : '' ?>>D4</option>
                    <option value="s1" <?= old('pendidikan') === 's1' ? 'selected' : '' ?>>S1</option>
                    <option value="s2" <?= old('pendidikan') === 's2' ? 'selected' : '' ?>>S2</option>
                    <option value="s3" <?= old('pendidikan') === 's3' ? 'selected' : '' ?>>S3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_hp">No. HP<span class="text-danger">*</span>:</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= old('no_hp') ?>">
            </div>

            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span>:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= old('email') ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

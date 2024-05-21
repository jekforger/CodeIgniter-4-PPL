<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Success</h1>

        <?php if (session()->has('userData')) : ?>
            <div class="alert alert-success" role="alert">
                <p>Data has been submitted successfully:</p>
                <ul>
                    <?php foreach (session('userData') as $key => $value) : ?>
                        <li><strong><?= $key ?>:</strong> <?= $value ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <p>No data submitted.</p>
            </div>
        <?php endif ?>
    </div>
</body>
</html>

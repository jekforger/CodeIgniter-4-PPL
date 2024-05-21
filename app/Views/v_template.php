<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <center>
            <table border="1" class="table table-striped table-bordered table-light" style="width: 50%;
    margin: 0 auto">
                <tr class="">
                    <th colspan="3">
                        <center>Header</center>
                    </th>
                </tr>
                <tr class="">
                    <td>
                        <center><a href="/display">Home</a></center>
                    </td>
                    <td>
                        <center><a href="/info">Info</a></center>
                    </td>
                    <td>
                        <center><a href="/Barang">Barang</a></center>
                    </td>
                    <td>
                        <center><a href="/validation">Validation Form</a></center>
                    </td>
                </tr>
                <tr class="table-light">
                    <td colspan="3">
                        <?php

                        use SebastianBergmann\CodeCoverage\Report\Html\Renderer;

                        $this->renderSection("content");
                        ?>
                        <br>
                    </td>
                </tr>
                <tr class="">
                    <td colspan="3">
                        <center>footer</center>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>

</html>
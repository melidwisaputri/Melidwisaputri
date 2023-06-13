<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Film</h1>
    <table border ="1" cellspacing="5" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>nama film</th>
            <th>Id Genre</th>
            <th>duration</th>
        </tr>
        <?php $i = 1 ;?>
        <?php foreach($semuaFilm as $Film): ?>
            <tr>
                <td><?= $i++;?></td>
                <td>
                    <img style="width: 50px;" src="/assets/cover/<?=$Film['cover']?>" alt="">
                </td>
                <td><?php echo $Film['nama_film']?></td>
                <td><?= $Film['id_genre']?></td>
                <td><?= $Film['duration']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Check</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php if (! empty($transactions)): ?>
            <?php foreach($transactions as $transaction): ?>
                <td><?= $transaction[0]?></td>
                <td><?= $transaction[1]?></td>
                <td><?= $transaction[2]?></td>
                <td><?= $transaction[3]?></td>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
    </table>
</body>
</html>
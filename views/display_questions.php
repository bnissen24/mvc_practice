<?php include('abstract-views/header.php'); ?>

<h2>Questions for User with ID: <?php echo $userId; ?></h2>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Body</th>
    </tr>
    <?php foreach ($questions as $question) : ?>
        <tr>
            <td><?php echo $question['id']; ?></td>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include('abstract-views/footer.php'); ?>

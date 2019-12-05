<?php include('abstract-views/header.php'); ?>

<a href=".?action=display_question_form&userId=<?php echo $userId ?>">Add Questions</a>

<table>
    <tr>
        <th>Name</th>
        <th>Body</th>
    </tr>
    <?php foreach($questions as $question) : ?>
        <tr>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include('abstract-views/footer.php.php'); ?>
<?php

function get_questions_by_ownerId ($ownerId) {
    global $db;
    $query = 'SELECT * FROM questions WHERE ownerId = :ownerId';

    $statement = $db->prepare($query);
    $statement->bindValue(':ownerId', $ownerId);
    $statement->execute();

    $questions = $statement->fetchAll();
    $statement->closeCursor();

    return $questions;
}
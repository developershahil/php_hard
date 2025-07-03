<?php
session_start();

if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
}

if (isset($_POST['task'])) {
    $_SESSION['list'][] = $_POST['task'];
}

if (isset($_POST['delete'])) {
    $i = $_POST['delete'];
    unset($_SESSION['list'][$i]);
    $_SESSION['list'] = array_values($_SESSION['list']);
}
?>

<form method="post">
    <input type="text" name="task" placeholder="Enter task">
    <input type="submit" value="Add">
</form>

<ul>
<?php foreach ($_SESSION['list'] as $i => $task): ?>
    <li>
        <?php echo $task ?>
        <form method="post" style="display:inline;">
            <input type="hidden" name="delete" value="<?= $i ?>">
            <button type="submit">Delete</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>

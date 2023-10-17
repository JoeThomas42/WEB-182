<?php require_once('../../private/initialize.php'); 

// fancy if...else
$id = $_GET['id'] ?? '1';

// if the id is not empty assign it the value from $_GET['id']
// else $id = 1
// or use the non-coalesing operator

$pageTitle = 'Salamander Details';

// include the shared path to the header
include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h2>Salamander Details</h2>
  <p>Page ID: <?= h($id) ?></p>
  <p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
</main>

<!-- Use the shared path to the salamander footer. -->
<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>

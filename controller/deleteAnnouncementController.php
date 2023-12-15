<?php
session_start();

require_once('../controller/connection/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the announcement_id is set
    if (isset($_POST['id'])) {
        $announcementId = $_POST['id'];

        // Perform the deletion query
        $deleteQuery = "DELETE FROM announcement WHERE id = $announcementId";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if ($deleteResult) {
            echo "Announcement deleted successfully.";
        } else {
            echo "Error deleting announcement: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request. Announcement ID is not set.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

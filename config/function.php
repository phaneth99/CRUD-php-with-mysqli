<?php include "conn.php";
    session_start();
function validate($inputdata)
    {
        global $conn;
        $validateData = mysqli_real_escape_string($conn, $inputdata);
        return trim($validateData);
    }

function redirect($url, $status)
    {
        $_SESSION['status'] = $status;
        header('location:' . $url);
        exit(0);
    }
function alertMessage()
    {
        if (isset($_SESSION['status'])) {
            // Initialize the alert type
            $alertType = 'warning'; // Default to warning

            // Check the status message for specific keywords
            $status = strtolower($_SESSION['status']);

            if (strpos($status, 'success') !== false) {
                $alertType = 'success';
            } elseif (strpos($status, 'error') !== false || strpos($status, 'danger') !== false) {
                $alertType = 'danger';
            } elseif (strpos($status, 'info') !== false) {
                $alertType = 'info';
            }

            echo '<div class="alert alert-' . $alertType . ' alert-dismissible fade show" role="alert">
                ' . $_SESSION['status'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

            unset($_SESSION['status']);
        }
    }
function SpecialChars($string)
    {
        // Regular expression to check for special characters
        return preg_match('/[^a-zA-Z0-9]/', $string);
    }



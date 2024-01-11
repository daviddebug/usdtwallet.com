<?php






if(isset($_POST['submit'])) {
    $inputWord = $_POST['word'];
    if($inputWord == "word") {
        header("Location: overview.html");
        exit();
    } else {
        echo "No user found";
    }
}
?>

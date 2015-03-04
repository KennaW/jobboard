<?php
class jobOpening
{
        private $title;
        private $description;
        private $contact_info;

        function __construct($title, $desription, $info)
        {
            $this->title = $title;
            $this->description = $description;
            $this->contact_info = $info;
        }

        function setTitle($title)
        {
            $this->title = $title;
        }

        function setDesription($description)
        {
            $this->$description = $description;
        }

        function setContactInfo($info)
        {
            $this->$contact_info = $info;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getDesription()
        {
            return $this->description;
        }

        function getContactInfo()
        {
            return $this->contact_info;
        }


}

$new_job = new jobOpening($_GET['title'], $_GET['description'], $_GET['contact_info']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>New Job</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class='container'>
        <h1>New Job!</h1>
        <?php
        $title = $new_job->getTitle();
        $desription = $new_job->getDescription();
        $info = $new_job->getContactInfo();
        echo "<h1>$title</h1>";
        echo "<p>$description</p>";
        echo "<p>$info</p>";
        
        ?>
</body>
</html>

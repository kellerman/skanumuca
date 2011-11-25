<?php
    $this->load->view("shared/header");
?>
<?php
    $this->load->view("shared/footer_tags");
?>
<?php
    $this->load->view("shared/menu/music");
?>
<h1>Skaņumuca</h1>
<?php 

foreach ($viewdata as $view) {
                    echo $view->title;
                    echo "   ";
		}

?>
<?php
    $this->load->view("shared/footer");
?>

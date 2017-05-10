<?php
    session_start();
?>

<div class="medlemmar">
    <div class="profilbild"> 
        <img src="<?= $event['employee_picture'] ?>">
    </div>
    <div class="profilinfo">
        <?= $event['employee_name'] ?>
        <br>
        <a href="mailto:<?= $event['employee_email'] ?>"><?= $event['employee_email'] ?></a>  
        <br>
        Information: <?= $event['employee_info'] ?>
    </div>        
    
    <br><br><br>
    <div class="employee-buttons">
        <?php
        //hvis fremmednøkkelen er true (ikke er null), legg til knapp
        if($event['']) //Linke til artikler skrevet av forfatter/ansatt"
        { ?>
            <a id="employee-article-link" href="employee-article.php?id=<?= $event[''] ?>">
                <button class="employee-btn" type="button"> Se Artikler (placeholder) </button>
            </a>
        <?php }

        if(isset($_SESSION['use']))
        { ?>
            <!--- Sletteknapp --->
            <a class="employee-delete-class" href="delete-employee.php?id=<?= $event['id'] ?>">
                <button class="employee-btn" type="button"> Fjern Ansatt (placeholder) </button>
            </a>
            <!--- Endreknapp --->
            <a class="employee-edit-class" href="edit-employee.php?id=<?= $event['id'] ?>">
                <button class="employee-btn" type="button"> Endre Info (placeholder) </button>
            </a>
        <?php } ?>
    </div>
</div>
<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM employees WHERE id =' .$_GET['id']);
    require 'connection-footer.php';
    require 'header.php';
?>

<div class="wrap">
    <div class="box">    
        <?php
        foreach ($events as $event) //Unødvendig, annen måte i hente verdier som blir endret til "$event" her?
        { 
            echo 'Fyll ut alle felt market med en stjerne(*)<br>'; ?>
            <main class="form-edit">
                <div class="">
                    <form class="" action="update-employee.php" method="post">
                        <div class="">
                            <input class="" type="text" id="edit-name" name="edit-name" value="<?= $event['employee_name'] ?>">
                            <label class="">Navn*</label>
                        </div>
                        <div class="">
                            <input class="" type="text" id="edit-picture" name="edit-picture" value="<?= $event['employee_picture'] ?>">
                            <label class="">Bilde</label>
                        </div>
                        <div class="">
                            <input class="" type="text" id="edit-email" name="edit-email" value="<?= $event['employee_email'] ?>">
                            <label class="">Email</label>
                        </div>
                        <div class="">
                            <textarea class="" type="text" rows= "10" id="edit-info" name="edit-info">
                                <?= $event['employee_info']?>
                            </textarea>
                            <label class="" for="body">Info</label>
                        </div>
                        <button class="">
                            Lagre
                        </button>
                        <input type="hidden" name="edit-employee-id" value="<?= $_GET['id']?>"> <!--- Henter ID og sender den videre --->
                    </form>
                </div>
            </main>
        <?php } ?>
    </div>
</div>

<?php
    require 'footer.php'; 
?>
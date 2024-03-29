<?php
class InscriptionController {

    public function showForm() {
        include('inscription.php'); // Chemin vers votre fichier de vue
    }
}
$i=new InscriptionController();
$i->showForm();
?>


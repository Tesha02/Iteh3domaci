<?php
if (isset($_POST['submit']) && $_POST['submit'] == "Izmeni" && isset($_POST['id'])) {
    $prijava = new Prijava($_POST['id'], $_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']);
    $status = Prijava::update($prijava, $conn);
    
    if ($status) {
        echo "Uspesno ste ažurirali prijavu";
    } else {
        echo "Doslo je do problema prilikom ažuriranja prijave";
    }
}
?>
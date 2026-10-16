<?php

include_once(ROOT . 'BD/Visiteur.php');

function selectall()
{
      $res = Select_all();
      $data = [];
      while ($ligne = mysqli_fetch_row($res)) {
            $data[] = $ligne;
      }
      include_once(ROOT . 'IHM/visiteur/index.php');
}

function afficher($id)
{
      $V = Select_one((int) $id);
      if (!$V) {
            include_once(ROOT . 'IHM/404.php');
            return;
      }
      include_once(ROOT . 'IHM/visiteur/show.php');
}
function modifier($id)
{
    $id = (int) $id;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST['id'] = $id;
        update($_POST);
        header('Location: ' . BASE . 'Visiteur/all');
        exit;
    }
    $V = Select_one($id);
    if (!$V) {
        include_once(ROOT . 'IHM/404.php');
        return;
    }
    include_once(ROOT . 'IHM/visiteur/form.php');
}

function supprimer($id)
{
    delete((int) $id);
    header('Location: ' . BASE . 'Visiteur/all');
    exit;
}
function ajouter()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        insert($_POST);
        header('Location: ' . BASE . 'Visiteur/all');
        exit;
    }
    include_once(ROOT . 'IHM/visiteur/form.php');
}
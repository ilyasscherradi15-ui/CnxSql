<?php
include_once "Connexion.php";

$link = Connexion();

function Select_all()
{
  global $link;
  $sql = "select * from visiteurs";
  return mysqli_query($link, $sql);
}

function Select_one($id)
{
  global $link;
  $sql = "select * from visiteurs where ID='$id'";
  return mysqli_fetch_array(mysqli_query($link, $sql));
}

function insert($data) {
  global $link;
  $nom = mysqli_real_escape_string($link,$data['nom']);
  $prenom=mysqli_real_escape_string($link,$data['prenom']);
  $email=mysqli_real_escape_string($link,$data['email']);
  $sql="insert into visiteurs (NOM,PRENOM,EMAIL) values ('$nom','$prenom','$email')";
  return mysqli_query($link,$sql);
}

function update($data) {
  global $link;
  $id=(int) $data['id'];
  $nom=mysqli_real_escape_string($link,$data['nom']);
  $prenom=mysqli_real_escape_string($link,$data['prenom']);
  $email=mysqli_real_escape_string($link,$data['email']);
  $sql="update visiteurs set NOM='$nom',PRENOM='$prenom',Email='$email' where ID=$id";
    $r = mysqli_query($link, $sql);
  if (!$r) { die(mysqli_error($link)); }
  return $r;
}

function delete($id) {
  global $link;
  $id=(int) $id;
  $sql="delete from visiteurs where ID=$id";
  return mysqli_query($link,$sql);
}
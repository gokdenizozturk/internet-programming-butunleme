<?php

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=gokoflix;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function adminCek($adminKullAdi)
{
    global $conn;
    $admin = $conn
        ->query("SELECT * FROM admin WHERE kullAdi = '$adminKullAdi'")
        ->fetch();
    return $admin;
}


function getirKategoriler()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM kategoriler");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function EkleFilm($ad, $kategoriId, $cikisYil, $puan, $foto)
{

    global $conn;
    $conn->prepare("INSERT INTO `filmler`(`ad`, `kategori`, `cikis_yili`, `puan`, `foto`) VALUES (?,?,?,?,?)")->execute([$ad, $kategoriId, $cikisYil, $puan, $foto]);
}

function guncelleFilm($filmId, $ad, $kategoriId, $cikisYil, $puan, $foto)
{
    global $conn;
    $conn->prepare("UPDATE `filmler` SET `ad`=?,`kategori`=?,`cikis_yili`=?,`puan`=?,`foto`=? WHERE id = ?")->execute([$ad, $kategoriId, $cikisYil, $puan, $foto, $filmId]);
}


function silFilm($filmId)
{
    global $conn;
    $conn->prepare("DELETE FROM `filmler` WHERE id = ?")->execute([$filmId]);
}

function getirFilmler()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM filmler");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function filmGetir($filmId)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM filmler WHERE id = ?");
    $query->execute([$filmId]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function adminGetir()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM admin");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function kacKullaniciVar()
{
    global $conn;
    $query = $conn->prepare("SELECT count(*) FROM admin");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function kacFilmVar()
{
    global $conn;
    $query = $conn->prepare("SELECT count(*) FROM filmler");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function ortalamaFilmPuan()
{
    global $conn;
    $query = $conn->prepare("SELECT AVG(puan) FROM filmler");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function kacKategoriVar()
{
    global $conn;
    $query = $conn->prepare("SELECT count(*) FROM kategoriler");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function Ara($value)
{
    global $conn;
    $sql = "SELECT * FROM filmler where ad LIKE '%$value%'";
    $film = $conn
        ->query($sql)
        ->fetchAll();
    return $film;
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/js/app.js')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/comum.css') ?>">   
    <link rel="stylesheet" href="<?= base_url('assets/css/template.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/icofont.min.css') ?>">

</head>


<body>
    <header class="header">
        <div class="menu-toggle mx-3">
            <i class="icofont-navigation-menu"></i>
        </div>
        <div class="space"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <span>Usuário</span>
                <i class="icofont-simple-down mx-2"></i>
            </div>
            <div class="dropdown-content">
                <ul class="nav-item">
                    <a href="/page">
                        <i class="icofont-logout mr-2"></i>
                        Sair
                    </a>
                </ul>
            </div>
        </div>
    </header>


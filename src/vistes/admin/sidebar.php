<a class="nav-link" href="index.php?r=admin">Dashboard</a>
<a class="nav-link" href="index.php?r=indexHabitacio">Habitacions</a>
<?php if($rol == 'admin') {
        echo "<a class='nav-link' href='index.php?r=indexUsuari'>Usuaris</a>";
    } 
?>
<a class="nav-link" href="index.php?r=indexReserva">Reserves</a>
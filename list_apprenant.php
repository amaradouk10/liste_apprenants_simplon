<?php
require_once 'connexion.php';
?>
<table>
   <thead>
        <tr>
            <th>EMAIL</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE</th>
            <th>FORMATION</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <?php
        try{
            $afficher=$db->query('SELECT*FROM monprojet order by EMAIL ASC');
            while($reccuperation=$afficher ->fetch()){
                echo "<tr>";
                echo "<td>" .$reccuperation['EMAIL']."</td>";
                echo "<td>" .$reccuperation['NOM']."</td>";
                echo "<td>" .$reccuperation['PRENOM']."</td>";
                echo "<td>" .$reccuperation['DATE']."</td>";
                echo "<td>" .$reccuperation['FORMATION']."</td>";
                echo "<tr>";
            }
            $afficher->closecursor();
        }
        catch(PDOException $e){
            print "erreur !:" . $e->getMessage() . "</br>";
            die();}
    
    ?>
            </tr> 
</tbody>
</table>
<style>
table{
    border-collapse:collapse;
}
td,th{
    border:1px solid black;
    width:40vw;
}

</style>
<h1>Welkom op de inlog pagina</h1>
<?php
$attributes = array('name' => 'mijnFormulier');
echo form_open('home/controleerAanmelden', $attributes);
?>
<table>
    <tr>
        <td><?php echo form_label('E-mail:', 'email'); ?></td>
        <td><?php echo form_input(array('name' => 'gebruikersnaam', 'id' => 'gebruikersnaam', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Wachtwoord:', 'wachtwoord'); ?></td>
        <td><?php
            $data = array('name' => 'wachtwoord', 'id' => 'wachtwoord', 'size' => '30');
            echo form_password($data);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('knop', 'Verzenden'); ?></td>
    </tr>
</table>

<?php echo form_close(); ?>

<p>Geen account?

    <a href='application/views/registreer.php'>Registreer</a>
    <?php echo anchor('home/registreer', 'Registreer'); ?></div>


</p>
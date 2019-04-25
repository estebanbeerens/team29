<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Beheer</th>
            <th>Evenement</th>
        </tr>
        <?php foreach ($personen as $persoon){ ?>
        <tr>

            <td><?php
                $teller = 0;
                echo $persoon->naam . " " . $persoon->voornaam;?></td>

            <?php

            if(count($persoon->persoonEvenementen > 0))
            {

                foreach ($persoon->persoonEvenementen as $persoonEvenement){ ?>
                    <?php
                    if($teller > 0)
                    {
                        echo "</tr><tr><td></td>";

                    }
                    ?>
                    <td>
                        <?php echo anchor('persoonEvenement/persoonEvenementBewerken/' . $persoonEvenement->id, "Bewerken", 'class="anchorBewerken btn btn-primary"'); ?>
                    </td>
                    <td><?php echo $persoonEvenement->evenement->naam;?></td>
                    <?php $teller++;
                    ?>
                    <td class="delete"><?php echo "<a href='persoonEvenementDeleten?id=".$persoonEvenement->id."'><i class=\"fas fa-trash-alt\"></i></a>"; ?></td>
                    <?php
                }?>
            <?php }
            else
            {
                echo "<td>Geen evemenementen gevonden</td>";
            }
            echo "</tr>";
            }
            ?>
    </table>
    <?php echo anchor('persoonEvenement/persoonEvenementViewLaden', 'Agenda toevoegen',  'class="anchorBewerken2 btn btn-primary"'); ?>
</div>
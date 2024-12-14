<table class="table table-hover">
    <?php
    include('../connection.php');
    $current_page = basename($_SERVER['PHP_SELF']);

    if ($current_page == 'batumi.php') {
        $munic_id = 13;
    } elseif ($current_page == 'qeda.php') {
        $munic_id = 14;
    } elseif ($current_page == 'qobuleti.php') {
        $munic_id = 15;
    } elseif ($current_page == 'shuaxevi.php') {
        $munic_id = 16;
    } elseif ($current_page == 'xelvachauri.php') {
        $munic_id = 17;
    } elseif ($current_page == 'xulo.php') {
        $munic_id = 18;
    } elseif ($current_page == 'choxatauri.php') {
        $munic_id = 12;
    } elseif ($current_page == 'lanchxuti.php') {
        $munic_id = 10;
    } elseif ($current_page == 'ozurgeti.php') {
        $munic_id = 11;
    } elseif ($current_page == 'bagdadi.php') {
        $munic_id = 25;
    } elseif ($current_page == 'chiatura.php') {
        $munic_id = 34;
    } elseif ($current_page == 'khoni.php') {
        $munic_id = 36;
    } elseif ($current_page == 'kutaisi.php') {
        $munic_id = 32;
    } elseif ($current_page == 'sachxere.php') {
        $munic_id = 30;
    } elseif ($current_page == 'samtredia.php') {
        $munic_id = 29;
    } elseif ($current_page == 'terjola.php') {
        $munic_id = 28;
    } elseif ($current_page == 'tyibuli.php') {
        $munic_id = 31;
    } elseif ($current_page == 'vani.php') {
        $munic_id = 26;
    } elseif ($current_page == 'wyaltubo.php') {
        $munic_id = 33;
    } elseif ($current_page == 'xaragauli.php') {
        $munic_id = 35;
    } elseif ($current_page == 'zestafoni.php') {
        $munic_id = 27;
    } elseif ($current_page == 'adigeni.php') {
        $munic_id = 19;
    } elseif ($current_page == 'aspindza.php') {
        $munic_id = 20;
    } elseif ($current_page == 'axalcixe.php') {
        $munic_id = 22;
    } elseif ($current_page == 'axalqalaqi.php') {
        $munic_id = 21;
    } elseif ($current_page == 'borjomi.php') {
        $munic_id = 23;
    } elseif ($current_page == 'ninowminda.php') {
        $munic_id = 24;
    } elseif ($current_page == 'axmeta.php') {
        $munic_id = 57;
    } elseif ($current_page == 'dedofliswyaro.php') {
        $munic_id = 59;
    } elseif ($current_page == 'gurjaani.php') {
        $munic_id = 58;
    } elseif ($current_page == 'lagodexi.php') {
        $munic_id = 61;
    } elseif ($current_page == 'sagarejo.php') {
        $munic_id = 62;
    } elseif ($current_page == 'signagi.php') {
        $munic_id = 63;
    } elseif ($current_page == 'telavi.php') {
        $munic_id = 60;
    } elseif ($current_page == 'yvareli.php') {
        $munic_id = 64;
    } elseif ($current_page == 'dusheti.php') {
        $munic_id = 52;
    } elseif ($current_page == 'mcxeta.php') {
        $munic_id = 54;
    } elseif ($current_page == 'tianeti.php') {
        $munic_id = 53;
    } elseif ($current_page == 'yazbegi.php') {
        $munic_id = 55;
    } elseif ($current_page == 'bolnisi.php') {
        $munic_id = 41;
    } elseif ($current_page == 'dmanisi.php') {
        $munic_id = 43;
    } elseif ($current_page == 'gardabani.php') {
        $munic_id = 42;
    } elseif ($current_page == 'marneuli.php') {
        $munic_id = 45;
    } elseif ($current_page == 'rustavi.php') {
        $munic_id = 46;
    } elseif ($current_page == 'tetriwyaro.php') {
        $munic_id = 44;
    } elseif ($current_page == 'walka.php') {
        $munic_id = 47;
    } elseif ($current_page == 'ambrolauri.php') {
        $munic_id = 37;
    } elseif ($current_page == 'cageri.php') {
        $munic_id = 40;
    } elseif ($current_page == 'lentexi.php') {
        $munic_id = 38;
    } elseif ($current_page == 'oni.php') {
        $munic_id = 39;
    } elseif ($current_page == 'abasha.php') {
        $munic_id = 1;
    } elseif ($current_page == 'chxorowyu.php') {
        $munic_id = 7;
    } elseif ($current_page == 'martvili.php') {
        $munic_id = 3;
    } elseif ($current_page == 'mestia.php') {
        $munic_id = 4;
    } elseif ($current_page == 'poti.php') {
        $munic_id = 6;
    } elseif ($current_page == 'senaki.php') {
        $munic_id = 5;
    } elseif ($current_page == 'walenjixa.php') {
        $munic_id = 8;
    } elseif ($current_page == 'xobi.php') {
        $munic_id = 9;
    } elseif ($current_page == 'zugdidi.php') {
        $munic_id = 2;
    } elseif ($current_page == 'gori.php') {
        $munic_id = 48;
    } elseif ($current_page == 'kaspi.php') {
        $munic_id = 49;
    } elseif ($current_page == 'qareli.php') {
        $munic_id = 50;
    } elseif ($current_page == 'xashuri.php') {
        $munic_id = 51;
    }

    $tableRight = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'key_indicators_reg_en' : 'key_indicators_reg';
    $query = mysqli_query($link, "select * from " . $tableRight);
    while ($row = mysqli_fetch_array($query)) {
        $keyIndicator[$row['ID']] = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? $row['keyIndicators'] : $row['keyIndicators'];
        $dataContent[$row['ID']] = $row['dataContent'];
    }
    $query = mysqli_query($link, "select * from `municipalities` where ID = $munic_id");
    $row = mysqli_fetch_array($query);


    ?> <tr>
        <th><?php echo $keyIndicator[1]; ?></th>
    </tr>
    <tbody>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[2]; ?> "><?php echo $keyIndicator[2]; ?><span class="float-right"><?php echo $row['Area']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[3]; ?>"><?php echo $keyIndicator[3]; ?><span class="float-right"><?php echo $row['NumberOfCT']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[4]; ?>"><?php echo $keyIndicator[4]; ?><span class="float-right"><?php echo $row['Villages']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[5]; ?>"><?php echo $keyIndicator[5]; ?><span class="float-right"><?php echo $row['Population']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[6]; ?>"><?php echo $keyIndicator[6]; ?><span class="float-right"><?php echo $row['LiveBirths']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[7]; ?>"><?php echo $keyIndicator[7]; ?><span class="float-right"><?php echo $row['GeneralBirthRate']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[8]; ?>"><?php echo $keyIndicator[8]; ?><span class="float-right"><?php echo $row['Dead']; ?></span></td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[9]; ?>"><?php echo $keyIndicator[9]; ?><span class="float-right"><?php echo $row['GeneralMortalityRate']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[10]; ?>"><?php echo $keyIndicator[10]; ?><span class="float-right"><?php echo $row['NaturalIncrease']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[11]; ?>"><?php echo $keyIndicator[11]; ?><span class="float-right"><?php echo $row['Employees']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[12]; ?>"><?php echo $keyIndicator[12]; ?><span class="float-right"><?php echo $row['AVGSalary']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[13]; ?>"><?php echo $keyIndicator[13]; ?><span class="float-right"><?php echo $row['RegEcSub']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[14]; ?>"><?php echo $keyIndicator[14]; ?><span class="float-right"><?php echo $row['ActEcSub']; ?></span> </td>
        </tr>
        <tr>
            <td title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="<?php echo $dataContent[15]; ?>"><?php echo $keyIndicator[15]; ?><span class="float-right"><?php echo $row['NewlyEcEnt']; ?></span> </td>
        </tr>
    </tbody>
</table>
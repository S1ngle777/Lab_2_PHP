<?php
$dayOfWeek = date("w");
?>

<table border="1" style="border-collapse: collapse;">
    <tr >
        <th colspan="3">График работы докторов, каб. 333</th>
    </tr>
    <tr style="background-color: goldenrod">
        <td>П.н.</td>
        <td>Фамилия, имя</td>
        <td>График</td>
    </tr>
    <tr>
        <td>1.</td>
        <td>Аксенти Елена</td>
        <td><?php echo ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) ? '8:00-12:00' : 'Нерабочий день'; ?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Петрова Мария</td>
        <td><?php echo ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) ? '12:00-16:00' : 'Нерабочий день'; ?></td>
    </tr>
</table>

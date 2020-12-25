<?php
$dayOfMonth = date('t'); //число дней в текущем месяце
$dayCount = 1;
$n = 0;
echo date("l dS \of F Y H:i:s A", mktime(0, 0, 0, date("m"), date("d"), date("y")));
for ($i = 0; $i < 7; $i++)
{ // 1 неделя месяца
  $dayOfWeek = date('w', mktime(0, 0, 0, date('m'), $dayCount, date('Y')));
  $dayOfWeek = $dayOfWeek - 1;
  if ($dayOfWeek == -1) $dayOfWeek = 6;
  if ($dayOfWeek == $i) {
    $week[$n][$i] = $dayCount;
    $dayCount++;
  } else $week[$n][$i] = "";
}

while (true)
{// остальные недели месяца
  $n++;
  for ($i = 0; $i < 7; $i++) {
    $week[$n][$i] = $dayCount;
    $dayCount++;
    if ($dayCount > $dayOfMonth) break;
  }
  if ($dayCount > $dayOfMonth) break;
}

echo "<table border=1>";
echo'<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th style="color:red;">Сб</th><th style="color:red;">Нд</th></tr>';
for ($i = 0; $i < count($week); $i++) {
  echo '<tr style="text-align:center;">';
  for ($j = 0; $j < 7; $j++) {
    if (!empty($week[$i][$j])) {
      if ($j == 5 || $j == 6)
        echo '<td style="color:red;">'. $week[$i][$j] . '</td>';
      else echo "<td>" . $week[$i][$j] . "</td>";
    } else echo "<td>&nbsp;</td>";
  }
  echo "</tr>";
}
echo "</table>";

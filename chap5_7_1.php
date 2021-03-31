<!DOCTYPE html>
<title>干支計算機</title>
<h1>干支計算機</h1>
<?php
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}
function eto($year) {
  $etos = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
  return $etos[($year - 4) % 12];
}
$year = filter_input(INPUT_GET,"year",FILTER_VALIDATE_INT);
?>
<?php if (empty($year)): ?>
  <p>数字を入力してください</p>
  <form method="get">
    <label>年</label>
    <input name="year" type="number" value="<?= h(date("y")) ?>">
  </form>
<?php else : ?>
  <p><?= h($year) ?>年は
  <?= eto($year) ?>年です。</p>
<?php endif; ?>    
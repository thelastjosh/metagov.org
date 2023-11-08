<?php $table = $block->table()->toTable(); ?>
<?php if ($table != null) : ?>
  <table class="table-auto">
    <?php foreach ($table as $index => $tableRow) : ?>
      <?php if ($index == 0) : ?>
        <tr>
          <?php foreach ($tableRow as $tableCell) : ?>
            <th><?= $tableCell; ?></th>
          <?php endforeach; ?>
        </tr>
      <?php else : ?>
        <tr>
          <?php foreach ($tableRow as $tableCell) : ?>
            <td><?= $tableCell; ?></td>
          <?php endforeach; ?>
        </tr>
      <?php endif ?>
    <?php endforeach; ?>
  </table>
<?php endif; ?>
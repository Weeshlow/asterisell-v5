<?php
use_helper('I18N', 'Form', 'Asterisell');

echo '<table>';

echo '<tr>';
echo '<td>';
echo form_tag('jobqueue/refreshView');
echo submit_tag(__('Refresh View'));
echo "</form>";
echo '</td>';

echo '<td>';
echo form_tag('jobqueue/seeProblems') . submit_tag(__('See Problems')) . '</form>';
echo '</td>';
echo '</tr>';

echo '</tr>';
echo '</table>';
?>
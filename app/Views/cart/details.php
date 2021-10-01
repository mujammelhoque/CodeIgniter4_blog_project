<?php echo form_open('shop/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:80%" border="1">

<tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; $total=0; ?>

<?php foreach ($allitems as $k=>$items): ?>

        <?php echo form_hidden($i.'[rowid]', $k); ?>

        <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        

                </td>
                <td style="text-align:right"><?php echo $items['price']; ?></td>
                <td style="text-align:right">$<?php echo $items['subtotal']; $total +=$items['subtotal']; ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $total; ?></td>
</tr>

</table>

<p><?php echo form_submit('', 'Update your Cart'); ?> <?php echo anchor('shop/empty','Empty cart'); ?></p>
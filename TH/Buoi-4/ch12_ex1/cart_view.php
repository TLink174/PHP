<!DOCTYP">
<htm">
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>
    <main>

        <h1>Your Cart</h1>
        <?php if (empty($_SESSION['cart12']) || count($_SESSION['cart12']) == 0) : ?>
            <p>Hiện tại không có sản phẩm nào trong giỏ hàng của bạn.</p>
        <?php else: ?>
            <form action="." method="post">
            <input type="hidden" name="action" value="update">
            <table>
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Item Cost</th>
                    <th class="right">Quantity</th>
                    <th class="right">Item Total</th>
                </tr>
            <?php foreach( $_SESSION['cart12'] as $key => $item ) :
                $cost  = number_format($item['cost'],  2);
                $total = number_format($item['total'], 2);
            ?>
                <tr>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>
                    <td class="right">
                        $<?php echo $cost; ?>
                    </td>
                    <td class="right">
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr id="cart_footer">
                    <td colspan="3"><b>Subtotal</b></td>
                <td>$<?php echo get_subtotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="right">
                        <input type="submit" value="Update Cart"/>
                    </td>
                </tr>
            </table>
            <p>Nhấp vào "Update Cart" để cập nhật số lượng
                xe đẩy. Nhập số lượng 0 để xóa một mặt hàng.
            </p>
            </form>
        <?php endif; ?>
        <p><a href=".?action=show_add_item">Add Item</a></p>
        <p><a href=".?action=empty_cart">Empty Cart</a></p>

    </main>
</body>
</html>

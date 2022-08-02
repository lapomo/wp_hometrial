 <a 
    href="<?php echo esc_url( $button_url ); ?>" 
    class="<?php echo $button_class; ?>" 
    title="<?php echo esc_attr__($button_text); ?>" 
    data-added-text="<?php echo esc_attr__( $button_added_icon, 'hometrial'); ?>" 
    data-product_id="<?php echo esc_attr( $product_id ); ?>">
        <?php echo $button_icon; ?>
    <a 
        href="<?php echo esc_url( $button_url ); ?>" 
        class="hometrial-limit-pop">
            <?php echo $max_num_reached_msg; ?>
    </a>
</a>

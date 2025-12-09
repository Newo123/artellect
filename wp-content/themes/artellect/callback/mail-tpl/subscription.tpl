<h1>Subscription from the site</h1>

<p style="font-size: 16px;">E-mail: <a href="mailto:<?php echo strip_tags($email);?>"><?php echo strip_tags($email);?></a></p>

<?php if(!empty($message)):?>
    <p style="font-size: 16px;">Описание проекта:</p>
    <p style="font-size: 16px;"><?php echo strip_tags($message);?></p>
<?php endif; ?>

<?php if(!empty($link_page)): ?>
    <p style="font-size: 16px;">Link to page: <a href="<?php echo $link_page;?>" target="_blank"><?php echo $link_page;?></a></p>
<?php endif; ?>

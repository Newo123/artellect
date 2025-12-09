<h1>Форма обратной связи от: <?php echo strip_tags($name);?></h1>

<p style="font-size: 16px;">Данные:</p>
<?php if(!empty($name)):?>
<p style="font-size: 16px;">Имя: <?php echo strip_tags($name);?></p>
<?php endif; ?>
<?php if(!empty($phone)):?>
<p style="font-size: 16px;">Телефон: <a href="tel:<?php echo strip_tags(preg_replace('/[^\d+]/', '', $phone));?>"><?php echo strip_tags($phone);?></a></p>
<?php endif; ?>
<?php if(!empty($email)):?>
<p style="font-size: 16px;">E-mail: <?php echo strip_tags($email);?></p>
<?php endif; ?>
<?php if(!empty($company)):?>
<p style="font-size: 16px;">Компания: <?php echo strip_tags($company);?></p>
<?php endif; ?>

<?php if(!empty($link_page)): ?>
    <p style="font-size: 16px;">Форма отправлена со страницы: <a href="<?php echo $link_page;?>" target="_blank"><?php echo $link_page;?></a></p>
<?php endif; ?>

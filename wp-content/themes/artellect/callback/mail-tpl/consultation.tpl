<h1>Форма обратной связи от: <?php echo strip_tags($name);?></h1>

<p style="font-size: 16px;">Данные:</p>
<?php if(!empty($name)):?>
<p style="font-size: 16px;">Имя: <?php echo strip_tags($name);?></p>
<?php endif; ?>
<?php if(!empty($job)):?>
<p style="font-size: 16px;">Должность: <?php echo strip_tags($job);?></p>
<?php endif; ?>
<?php if(!empty($scope)):?>
<p style="font-size: 16px;">Сфера деятельности: <?php echo strip_tags($scope);?></p>
<?php endif; ?>
<?php if(!empty($phone)):?>
<p style="font-size: 16px;">Телефон: <a href="tel:<?php echo strip_tags(preg_replace('/[^\d+]/', '', $phone));?>"><?php echo strip_tags($phone);?></a></p>
<?php endif; ?>
<?php if(!empty($message)):?>
<p style="font-size: 16px;">Вопрос: <?php echo strip_tags($message);?></p>
<?php endif; ?>
<?php if(isset($confirm)):?>
<p style="color: <?php echo ($confirm === '1') ? 'green' : 'red'; ?>;">
    <strong>Согласие на обработку персональных данных:</strong> 
    <?php echo ($confirm === '1') ? '✅ ПОЛУЧЕНО' : '❌ НЕ ПОЛУЧЕНО'; ?>
</p>
<?php endif; ?>

<?php if(!empty($link_page)): ?>
    <p style="font-size: 16px;">Форма отправлена со страницы: <a href="<?php echo $link_page;?>" target="_blank"><?php echo $link_page;?></a></p>
<?php endif; ?>

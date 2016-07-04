<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$links = array('a', 'b', 'c', 'd');

?>

<div class="social-icons">
  <?php foreach ($links as $i): ?>
    <?php
    $name = 'social_network_name_'.$i;
    $link = 'social_network_link_'.$i;
    ?>

    <div class="three columns">
      <?php if ($params->get($link)&&($params->get($name)&&strtoupper($params->get($name))!="NONE")):?>
      <a href="<?php echo ($params->get($link));?>">
        <i class="fa fa-<?php echo ($params->get($name));?>"></i>
      </a>
      <?php else: ?>
        <br/>
      <?php endif; ?>
    </div>
  <?php endforeach;?>
</div>

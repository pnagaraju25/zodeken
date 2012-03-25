<?php

return <<<CODE
<?php if (\$this->pageCount): ?>
<div class="paginationControl">
<!-- Previous page link -->
<?php if (isset(\$this->previous)): ?>
  <a href="<?php echo \$this->url(\$_GET + array('page' => \$this->previous)); ?>">
    &lt; Previous
  </a> |
<?php else: ?>
  <span class="disabled">&lt; Previous</span> |
<?php endif; ?>
 
<!-- Numbered page links -->
<?php foreach (\$this->pagesInRange as \$page): ?>
  <?php if (\$page != \$this->current): ?>
    <a href="<?php echo \$this->url(\$_GET + array('page' => \$page)); ?>">
        <?php echo \$page; ?>
    </a> |
  <?php else: ?>
    <?php echo \$page; ?> |
  <?php endif; ?>
<?php endforeach; ?>
 
<!-- Next page link -->
<?php if (isset(\$this->next)): ?>
  <a href="<?php echo \$this->url(\$_GET + array('page' => \$this->next)); ?>">
    Next &gt;
  </a>
<?php else: ?>
  <span class="disabled">Next &gt;</span>
<?php endif; ?>
</div>
<?php endif; ?>
CODE;
?>

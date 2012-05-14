FAMILY
<ul id="list-family">
  <?php foreach ($families as $i => $f) : ?>
    <?php include_partial('family/family', array('family' => $f)); ?>
  <?php endforeach; ?>
</ul>


<style>
  #list-family{
    list-style-type: none;
  }
  
   #list-family li{
    width: 208px;
    height: 300px;
    float:left;
    border-right: 1px solid grey;
  }
  
  #list-family li img{
    max-width: 208px;
  }
  
</style>
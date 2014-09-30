<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
		<?php $nr = rand(100 , 200); ?>
		<?php 
		if (150<$nr) { echo "Juhuslik number {$nr} on suurem kui 150";} 
		elseif	(150>$nr) { echo "Juhuslik number {$nr} on väiksem kui 150";} ;?>
        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->
		<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo rand(1,13);?>.jpg"/>

        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>

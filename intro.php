<?php 
include("inc/works.php");
$section = "intro";
$work_key = $_GET["work_key"];

$work = $works[$work_key];

include("inc/header.php");
?>
    
    <div id="wrapper">
      <section>
        <h3>Application name: <?php echo $works[$work_key]["name"]; ?></h3>
        
        <p>Introduction: <?php echo $works[$work_key]["intro"]; ?></p>

        <p class="btn-group">
            <a class="btn" href="index.php">&laquo; Back to portfilio</a>

            <a class="btn" href="<?php echo $works[$work_key]["url"]; ?>"><?php echo isset($work['link_label']) ? $work['link_label'] : 'Visit website' ?> &raquo;</a>
        </p>

        <img src="<?php echo $works[$work_key]["img"]; ?>" alt="">
                
      </section>
    </div>
<?php 
include("inc/footer.php");
?>


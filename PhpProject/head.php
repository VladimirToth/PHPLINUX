<?php
$meta=get_meta_data($page);
?>

<title><?php echo $meta['title'] ?></title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<meta content="<?php echo $meta['description'] ?>" name="description"/>
<meta content="<?php echo $meta['keyword'] ?>" name="keywords"/>
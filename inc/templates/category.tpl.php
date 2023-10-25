<h1><?= $categoryToDisplay->category ?></h1>

<?php foreach($dataArticlesList as $id => $category){

if (in_array($categoryToDisplay->category, $dataArticlesList)) {
    echo new Article($categoryToDisplay->category);
} else {
    echo "coucou";
}
}


?>

